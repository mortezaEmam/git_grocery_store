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


        return view('index');
}
public function account()
{
    return view('account');
}
public function store(Request $request)
{
    dd($request->all());
//    // convert latin to persian
//        $date = \Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime('2016-05-8')); // 1395-02-19
//        \Morilog\Jalali\CalendarUtils::convertNumbers($date); // ۱۳۹۵-۰۲-۱۹

// convert persian to latin
        $dateString = \Morilog\Jalali\CalendarUtils::convertNumbers('۱۳۹۵-۰۲-۱۹', true); // 1395-02-19
        \Morilog\Jalali\CalendarUtils::createCarbonFromFormat('Y-m-d', $dateString)->format('Y-m-d'); //2016-05-8
}
}
