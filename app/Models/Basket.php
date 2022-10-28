<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $guarded=[];


    public static function getTotalSessionCart()
    {
        $total=0;
        $basket_groups=self::getAllSessionCart();
        foreach ($basket_groups as $group)
        {
            $total+=$group['total'];
        }
        return $total;
    }
    public static function getAllSessionCart()
    {
        $baskets=[];
        $products=Product::query()->where('status','on')->get();

        foreach ($products  as $key=>$product) {
            if (session()->has('cart-product-' . $product->id)) {
                $baskets[$product->id]= session('cart-product-' . $product->id);

            }
        }
        return $baskets;
    }
    public static function getFindIdSessionCart($productId)
    {


            if (session()->has('cart-product-' . $productId)) {
                $basket= session('cart-product-' . $productId);

            }else{
                $basket=0;
            }

        return $basket;
    }

}

