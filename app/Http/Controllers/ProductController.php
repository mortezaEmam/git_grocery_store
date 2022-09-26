<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Description;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products=Product::query()->with('file')->get();


        return view('Admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=Category::query()->where('status','on')->get();
        return view('Admin.product.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->has('status')=='')
        {
            $status='off';
        }
        else{
            $status='on';
        }
        $product=Product::create([
            'title'=>$request->name,
            'short_description'=>$request->short_description,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'status'=>$status,

        ]);
        if($request->hasFile('thumbnail'))
        {
            $path='public/product/';
            $pic=$request->file('thumbnail');
            $file=File::uploadfile($pic,$path);
            $product->file()->save($file);


        }
        if($request->title[0] and $request->icon[0] )
        {
            if (is_array($request->title) && is_array($request->icon)) {
               foreach ($request->title as $key=>$item)
               {

                   $description=new Description([
                       'title'=>$request->title[$key],
                       'icon'=>$request->icon[$key],

                   ]);
                   $product->descriptions()->save($description);
               }
            }
            else {
                $description=new Description([
                    'title'=>$request->title,
                    'icon'=>$request->icon,

                ]);
                $product->descriptions()->save($description);
            }



        }


        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $categories=Category::query()->where('parent_id',0)->where('status','on')->orderBy('sort')->get();;


        $url_file=Product::getImageUrl($product);
        return view('single',compact('url_file','product','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $descriptions=$product->descriptions;

        $categories=Category::all();
        $url_file=Product::getImageUrl($product);
//        dd($url_file);
        return view('Admin.product.edit',compact('categories','product','url_file','descriptions'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

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
            $file=$product->file;

            Storage::delete($file->url.$file->name);
            $product->file()->delete();

            $path = 'public/product/';
            $pic = $request->file('thumbnail');
            $file = File::uploadfile($pic, $path);
            $product->file()->save($file);


        }
        if($request->title[0] and $request->icon[0] )
        {
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

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        Storage::delete(Product::getImageUrl($product));
        $product->file()->delete();
        $product->descriptions()->delete();
        Product::query()->find($product->id)->delete();
        return redirect()->route('product.index');
    }
    public function getDestoryDescriptionId(Request $request, Description $description)
    {

        $description->delete();

        return redirect()->route('product.edit',['product'=>$request->product]);



    }

}
