<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use http\Env\Response;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baskets=Basket::getAllSessionCart();

        return \response()->json(['baskets'=>$baskets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($productId)
    {
        $product=Product::query()->where('id',$productId)->first();
        if(session()->has('cart-product'.$product->id)==false)
        {
            $cart_new=[
                'title'=>$product->title,
                'quantity'=>1,
                'image'=>Product::getImageUrl($product),
                'created_at'=>now(),
                'updated_at'=>now(),
                'status'=>'no-success'
            ];
            $basket=session(['cart-product'.$product->id=>$cart_new]);
        }

        $cart = session('cart-product' . $product->id);
        return \response()->json([

            'id'=>'cart-product'.$product->id,
            'title' => $cart['title'],
            'quantity'=>$cart['quantity'],
            'image'=>Product::getImageUrl($product),
            'price'=>$product->price,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
