<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Transcation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TranscationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        if($user->hasrole('super_admin'))
            {
                $transactions=Transcation::all();
            }
       else
            {
                $transactions=Transcation::query()->where('user_id',$user->id)->get();

            }
        return view('transcation.transactions-index',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->has('order_id'))
        {
            $order=Order::query()->where('id',$request->order_id)->first();
            $orderDetailes=\App\Models\OrderDetaile::query()->where('order_id',$order->id)->get();

        }
        else
        {
            $order=Order::query()->where('user_id',Auth::id())->latest()->take(1)->first();
            $orderDetailes=\App\Models\OrderDetaile::query()->where('order_id',$order->id)->get();

        }
        return view('transcation-create',compact('order','orderDetailes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_find=Order::query()->where('id',$request->order_id)->first();
        $transcation = Transcation::query()->create([
            'user_id' => $order_find->user_id,
            'order_id' => $order_find->id,
            'gateway' => $request->gateway,
            'address' => $request->address,
            'phone' => $request->phone,
            'description' => $request->description,
            'qyt' => $order_find->qty,
            'amount' => $order_find->total_amount,
            'code_payment' => time(),
            'status' => 'paid',
        ]);
        $code_payment = $transcation->code_payment;
        $order_find->is_confirm='paid';
        $order_find->updated_at=now();
        $order_find->save();
        return view('transcation-index', compact('code_payment'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Transcation $transcation
     * @return \Illuminate\Http\Response
     */
    public function show(Transcation $transcation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Transcation $transcation
     * @return \Illuminate\Http\Response
     */
    public function edit(Transcation $transcation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Transcation $transcation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transcation $transcation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Transcation $transcation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transcation $transcation)
    {
        //
    }
}
