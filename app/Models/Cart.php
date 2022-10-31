<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public static function getSumTotalPrices()
    {
        $total=0;
        $carts=Cart::query()->where('status','unpaid')->where('user_id',Auth::id())->get();
        foreach ($carts as $cart)
        {
            $total_new=$cart->product->price*$cart->quantity;
            $total+=$total_new;

        }
        return $total;
    }
    public static function getSumNumberProduct()
    {
        $number=0;
        $carts=Cart::query()->where('status','unpaid')->where('user_id',Auth::id())->get();
        foreach ($carts as $cart)
        {
            $number+=$cart->quantity;
        }
        return $number;
    }
    public static function getIdCartProducts()
    {
        $cart_id=[];
        $carts=Cart::query()->where('status','unpaid')->where('user_id',Auth::id())->get();
        foreach ($carts as $cart)
        {
            $cart_id[]=$cart->id;
        }
        return $cart_id;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
