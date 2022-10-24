<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $guarded=[];

public function getAllSessionCart()
{
    $products=Product::query()->where('status','on')->get();

    foreach ($products  as $product) {
        if (session()->has('cart-product' . $product->id)) {
            $baskets[] = session('cart-product' . $product->id);
        }
    }
    return $baskets;
}


}

