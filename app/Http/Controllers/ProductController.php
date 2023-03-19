<?php

namespace App\Http\Controllers;

use App\Events\UpdateWareHouseDetaile;
use App\Events\WareHouseCreate;
use App\helpers\Helpers;
use App\Models\Category;
use App\Models\Description;
use App\Models\File;
use App\Models\Product;
use App\Models\ProductCountingUnit;
use App\Models\WareHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::query()->with('file')->get();
        return view('admin.product.product-index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::query()->where('status', 'on')->get();
        $product_counting_units = ProductCountingUnit::all();
        $warehouses = WareHouse::query()->where('origin_id', Auth::id())->where('status','on')->get();
        $data = [
            'categories' => $categories,
            'product_counting_units' => $product_counting_units,
            'warehouses' => $warehouses,
        ];
        return view('admin.product.product-create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($request->has('status') == '') {
            $status = 'off';
        } else {
            $status = 'on';
        }
        $product = Product::create([
            'title' => $request->name,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'status' => $status,

        ]);
        if ($request->hasFile('thumbnail')) {
            $path = "public/product/";
            $pic = $request->file('thumbnail');
            $file = File::uploadfile($pic, $path);
            $product->file()->save($file);


        }
        if ($request->title[0] and $request->icon[0]) {
            if (is_array($request->title) && is_array($request->icon)) {
                foreach ($request->title as $key => $item) {

                    $description = new Description([
                        'title' => $request->title[$key],
                        'icon' => $request->icon[$key],

                    ]);
                    $product->descriptions()->save($description);
                }
            } else {
                $description = new Description([
                    'title' => $request->title,
                    'icon' => $request->icon,

                ]);
                $product->descriptions()->save($description);
            }
        }
        if ($request->warhouse_panel == 'on') {
            if (filled($user->warehouse) and filled($product)) {
                WareHouseCreate::dispatch($request, $user, $product);
            } else {
                abort(403, 'you not find warehouse');
            }

        }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $warehouses = WareHouse::query()->where('origin_id', Auth::id())->where('status','on')->get();
        $product_counting_units = ProductCountingUnit::all();
        $warehousedetaile = $product->warehousedetaile()->first();
        $descriptions = $product->descriptions;
        $categories = Category::all();
        $url_file = Helpers::getUrlImage($product);
        $data = [
            'product' => $product,
            'warehousedetaile' => $warehousedetaile,
            'descriptions' => $descriptions,
            'categories' => $categories,
            'url_file' => $url_file,
            'warehouses' => $warehouses,
            'product_counting_units' => $product_counting_units,
        ];
        return view('admin.product.product-edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $user = Auth::user();
        if ($request->has('status') == '') {
            $status = 'off';
        } else {
            $status = 'on';
        }
        $product->update([
            'title' => $request->name,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'status' => $status,
        ]);


        if ($request->hasFile('thumbnail')) {
            $file_old = $product->file;
            if (filled($file_old)) {
                Storage::delete($file_old->url . $file_old->name);
                $product->file()->delete();
            }

            $path = 'public/product/';
            $pic = $request->file('thumbnail');
            $file_new = File::uploadfile($pic, $path);
            $product->file()->save($file_new);


        }
        if ($request->title[0] and $request->icon[0]) {
            if (is_array($request->title) and is_array($request->icon)) {
                foreach ($request->title as $key => $item) {

                    $description = new Description([
                        'title' => $request->title[$key],
                        'icon' => $request->icon[$key],

                    ]);
                    $product->descriptions()->save($description);
                }
            } else {
                $description = new Description([
                    'title' => $request->title,
                    'icon' => $request->icon,

                ]);
                $product->descriptions()->save($description);

            }

        }
        if ($request->has('warhouse_panel')) {
            if (filled($user->warehouse)) {
                UpdateWareHouseDetaile::dispatch($request, $user, $product);
            } else {
                abort(403, 'you not find warehouse');
            }

        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (filled($product->warehousedetaile()->first()))
        {
            $product->warehousedetaile()->delete();
            Storage::delete(Product::getImageUrl($product));
            $product->file()->delete();
            $product->descriptions()->delete();
            Product::query()->find($product->id)->delete();
        } else
            {

            Storage::delete(Product::getImageUrl($product));
            $product->file()->delete();
            $product->descriptions()->delete();
            Product::query()->find($product->id)->delete();
        }

        return redirect()->route('product.index');
    }

    public function setDestoryDescriptionId($description)
    {
        try {
            Description::query()->where('id', $description)->delete();

            return response()->json([
                'sucsess' => true,
            ]);
        } catch (Exception) {
            return response()->json([
                'sucsess' => false,]);
        }


    }

}
