<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        $categories=Category::all();
//        $quantities=Quantity::all();
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
            'description_id'=>null,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'status'=>$status,

        ]);
        if($request->hasFile('thumbnail'))
        {
            $path='public/product';
            $pic=$request->file('thumbnail');
            $file=File::uploadfile($pic,$path);
            $product->file()->save($file);


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


        $find_image=$product->file;
        $url_file=Storage::url($find_image->url.'/'.$find_image->name);
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

//        $quantities=$product->quantitys;
        $categories=Category::all();
        $find_image=$product->file;
        $url_file=Storage::url($find_image->url.'/'.$find_image->name);
        if(filled($find_image))
        {
            $image_url=$url_file;

        }
        else{
            $image_url='';


        }



        return view('Admin.product.edit',compact('categories','product','image_url'));
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
        if($request->has('status')=='')
        {
            $status='off';
        }
        else{
            $status='on';
        }
        $product->update([
            'title'=>$request->name,
            'short_description'=>$request->short_description,
            'description'=>$request->description,
            'description_id'=>null,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'status'=>$status,
        ]);


        if ($request->hasFile('thumbnail')) {
            $find_image=$product->file;
            $url_file=Storage::delete($find_image->url.'/'.$find_image->name);
            $product->file()->delete();
            $path = 'public/product';
            $pic = $request->file('thumbnail');
            $file=File::uploadfile($pic,$path);
            $product->file()->save($file);


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
        $find_image=$product->file;
        $url_file=Storage::delete($find_image->url.'/'.$find_image->name);
        $product->file()->delete();
//        $product->quantitys()->delete();
        $product=Product::query()->find($product->id)->delete();
        return redirect()->route('product.index');
    }

}
