<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index()
    {
//        $baskets=BasketController::getAllSessionCart();
//        if($baskets)
//        {
//            dd('yes');
//        }
//        else
//        {
//            dd('no');
//            $baskets='';
//        }
//        dd(session()->all());
//        session()->flush();
//        $baskets=[];
//        $total=[];
//        $products=Product::query()->where('status','on')->get();
//
//        foreach ($products  as $key=>$product) {
//            if (session()->has('cart-product-'.$product->id)) {
//                $baskets[$product->id] = session('cart-product-'.$product->id);
//            }
//        }
//       dd(Basket::getTotalSessionCart());
//        dd('ok');
        return view('index');
}
}
