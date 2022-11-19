<?php

namespace App\Http\Controllers;

use App\Events\OrderDetaile;
use App\Models\Cart;
use App\Models\CartDetaile;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasrole('super_admin'))
        {
            $orders = Order::all();
        }
        else
        {
            $orders = Order::query()->where('user_id', Auth::id())->get();

        }
        $data=[
            'orders'=>$orders,
        ];
        return view('admin.order.order-index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cart $cart)
    {
        dd($cart);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Cart $cart)
    {
        $find_cart=Cart::query()->where('id',$cart->id)->where('user_id',Auth::id())->first();
        $order=new Order();
        $order->user_id=$find_cart->user_id;
        $order->qty=$find_cart->qty;
        $order->total_amount=$find_cart->total;
        $order->save();
        OrderDetaile::dispatch($order,$find_cart);//create order and order-detaies and delete cartdetailes for cart
        $find_cart->delete();//delete basket user
        return redirect()->route('transcation.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orderDetailes=\App\Models\OrderDetaile::query()->where('order_id',$order->id)->get();
       return view('admin.order.order-detaile-show',compact('orderDetailes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
