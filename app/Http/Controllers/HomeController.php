<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use App\Models\WareHouse;
use App\Models\WareHouseDetaile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index()
    {
        $products = Product::query()->where('status','on')->get();
        foreach ($products as $product)
        {
            $warehousedetailes[] = Product::getStockwarehousedetailesId($product->id);
        }

        return view('index',compact('warehousedetailes'));
    }

    public function account()
    {
        return view('account');
    }


}
