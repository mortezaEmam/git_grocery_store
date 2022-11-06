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

        return view('index');
}
public function account()
{
    return view('account');
}
}
