<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index()
    {
//        session(['cart'=>['id'=>1,'title'=>'ali','total'=>0,'qantity'=>0,'image'=>''],['id'=>2,'title'=>'hossen','total'=>0,'qantity'=>0,'image'=>'']]);
//        dd(session()->all());
//        if(session()->has('cart-10'))
//        {
//            session()->forget('cart-10');
//          dump('ok');
//        }
//        else{
//            dump('no');
//        }
//        dd(session()->all());


        return view('index');
}
}
