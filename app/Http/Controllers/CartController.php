<?php

namespace App\Http\Controllers;

use App\Events\CartCreate;
use App\Events\CartDetail;
use App\Listeners\CreateCartDetaile;
use App\Models\Basket;
use App\Models\Cart;
use App\Models\CartDetaile;
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
        $user = Auth::user();
        CartCreate::dispatch($user);
        $cart_user = $user->cart;
        if (filled($cart_user)) {
            CartDetail::dispatch($cart_user);
        } else {
            abort(403, 'no find your cart');
        }
        $cart=Cart::query()->where('user_id',Auth::id())->first();
        $data = [

            'cart' => $cart,
            'cart_detailes' => CartDetaile::query()->where('cart_id', $cart->id)->get(),
        ];
        return view('cart.cart-index', $data);
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
