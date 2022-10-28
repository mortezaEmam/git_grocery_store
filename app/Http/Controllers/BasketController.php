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
        $baskets_sessin_cart=Basket::getAllSessionCart();
        if(filled($baskets_sessin_cart)) {
            foreach ($baskets_sessin_cart as $item) {
                $basket_id[] = $item['id'];
                $basket_title[] = $item['title'];
                $basket_quantity[] = $item['quantity'];
                $basket_price[] = $item['price'];
                $basket_image[] = $item['image'];
                $basket_total[] = $item['total'];
                $basket_created_at[] = $item['created_at'];
            }
        }
        else{
            $basket_id[] = '';
            $basket_title[] = '';
            $basket_quantity[] = '';
            $basket_price[] = '';
            $basket_image[] = '';
            $basket_total[] = '';
            $basket_created_at[] = '';

        }
        return \response()->json([
            'product_number'=>count(Basket::getAllSessionCart()),
            'total_baskets'=>Basket::getTotalSessionCart(),
            'baskets_id'=>$basket_id,
            'baskets_title'=>$basket_title,
            'baskets_quantity'=>$basket_quantity,
            'baskets_total'=>$basket_total,
            'baskets_image'=>$basket_image,
            'baskets_created_at'=>$basket_created_at,
            'baskets_price'=>$basket_price,

        ]);
//        $session_Basket_groups=self::getAllSessionCart();
//        if($session_Basket_groups)
//        {
//            $baskets=$session_Basket_groups;
//        }
//        else
//        {
//            $baskets='';
//        }
//        return \response()->json(['baskets'=>$baskets]);
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
        if(session()->has('cart-product-'.$product->id)==false)
        {

            $cart_new=[
                'id'=>$product->id,
                'title'=>$product->title,
                'quantity'=>1,
                'price'=>$product->price,
                'total'=>$product->price,
                'image'=>Product::getImageUrl($product),
                'created_at'=>now(),
                'updated_at'=>now(),
                'status'=>'no-success'
            ];
            $basket=session(['cart-product-'.$product->id=>$cart_new]);
        }

        $cart = session('cart-product-' . $product->id);
        return \response()->json([

            'id'=>'cart-product'.$product->id,
            'title' => $cart['title'],
            'quantity'=>$cart['quantity'],
            'image'=>Product::getImageUrl($product),
            'price'=>$product->price,
            'product_number'=>count(Basket::getAllSessionCart()),
            'total_baskets'=>Basket::getTotalSessionCart(),

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
