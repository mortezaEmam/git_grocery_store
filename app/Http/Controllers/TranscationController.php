<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transcation;
use Illuminate\Http\Request;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
dd($request->all());
        return view('transcation.transcation-create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $transcation = Transcation::query()->create([
            'user_id' => $request->user_id,
            'number_product' => $request->number_product,
            'total_price' => $request->sum_total_product,
            'address' => $request->address,
            'phone' => $request->phone,
            'description' => $request->description,
            'code_payment' => time(),
        ]);
        $code_payment = $transcation->code_payment;
        $cart_id = str_replace(',', '', $request->cart_id);
        $string_cart_id = implode('', $cart_id);
        for ($i = 0; $i < strlen($string_cart_id); $i++) {
            Transcation::setStatusCartSuccess($string_cart_id[$i]);

        }

        return view('transcation.transcation-index', compact('code_payment'));
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
