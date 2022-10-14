<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public static function getAllSession()
    {
        $products=Product::all();

//        $basket=[];
//        $total=0;
//        foreach ($products as $key=>$product) {
//            if( session()->has('cart-'.$product->id))
//            {
//                $basket[]=session('cart-'.$product->id);
//            }
//        }
//        foreach ($basket as $item)
//        {
//            $total+=$item['total'];
//        }
        $basket=session('cart');
        return $basket;

    }
}
