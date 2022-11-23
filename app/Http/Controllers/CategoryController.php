<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();

        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryies=Category::query()->where('parent_id',0)->get();
        return view('admin.category.create',compact('categoryies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(filled($request->status))
        {
            $status=$request->status;
        }
        else
        {
            $status='off';
        }
        Category::query()->create([
                'title'=>$request->title,
                'parent_id'=>$request->parent_id,
                'sort'=>$request->sort,
                'status'=>$status,
            ]


        );
        return  redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $products=$category->products;
        $products_warehouse = Product::query()->where('status','on')->get();
        foreach ($products_warehouse as $product)
        {
            $warehousedetailes[] = Product::getStockwarehousedetailesId($product->id);
        }
        return view('category' , compact('category','products','warehousedetailes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function edit(Category $category)
    {
        $categories=Category::query()->where('parent_id',0)->get();

        return view('Admin.category.edit',compact('category','categories'));
    }

    public function update(Request $request, Category $category)
    {

        if(filled($request->status))
        {
            $status=$request->status;
        }
        else
        {
            $status='off';
        }
        Category::query()->where('id',$category->id)->update([
            'title'=>$request->title,
            'parent_id'=>$request->parent_id,
            'sort'=>$request->input('sort'),
            'status'=>$status,
        ]);


        return  redirect()->route('category.index');

    }

    public function destroy(Category $category)
    {
        $temp=Category::getSubCategories($category);

        if(!filled($temp)){
            Category::query()->where('id',$category->id)->delete();
            return  redirect()->route('category.index');
        }
        else
        {
            $message='حدف این فیلد به دلیل سردسته بودن امکان پذیر نمی باشد!!';
            return  abort('403',$message);

        }


    }
}
