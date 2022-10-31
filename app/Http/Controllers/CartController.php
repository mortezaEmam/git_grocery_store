<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baskets = Basket::getAllSessionCart();

        foreach ($baskets as $basket) {
        Cart::query()->create([
            'user_id'=>Auth::id(),
            'product_id' => $basket['id'],
            'title' => $basket['title'],
            'quantity' => $basket['quantity'],
            'price' => $basket['price'],
            'total' => $basket['total'],
            'image' => $basket['image'],
            'created_at' => $basket['created_at'],
            'updated_at' => $basket['updated_at'],
        ]);

        session()->forget('cart-product-'.$basket['id']);
        }
$data=[

    'carts'=>Cart::query()->where('user_id',Auth::id())->get(),
        'sum_cart'=>Cart::getSumTotalPrices(),
    'number_product'=>Cart::getSumNumberProduct(),
    'cart_id'=>implode(',',Cart::getIdCartProducts()),
];


        return view('cart.cart-index',$data);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
