<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;

class CartController extends Controller
{
    public function index()
    {
      $basket= Cart::getAllSession();
      return response()->json([
          'basket'=>$basket,
      ]);
    }

    public function store(Request $request)
    {
        $total=0;
        $product_id=$request->productId;
        $product = Product::query()->find($product_id);
        $find=$product->file;

        $img_url=Storage::url($find->url.'/'.$find->name);
//        $cart1=session('cart2');
        if(session()->has('cart-'.$product->id)) {
            return response()->json([
                'message'=>"<p class='alert-danger'> محصول در سبد خرید وجود دارد</p>",
                'Success'=>false,
                'count_basket'=>$this->CartCount(),
                'allsession'=>\session()->all(),
            ]);
        }
        else {
            $total = $product->price;
            $cart[$product_id] = [
                "id"=>$product_id,
                "title" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $img_url,
                "total" => $total,
                "date" => now(),
            ];
            session(['cart-'.$product_id => $cart[$product_id]]);
        }
return response()->json([
    'message'=>"<p class='alert-success'> محصول با موفقیت به سبد اضافه شد</p>",
    'Success'=>true,
    'count_basket'=>$this->CartCount(),
    'allsession'=>\session()->all(),
]);

    }

    public function destroy(Request $request)
    {
       if(session()->has('cart-'.$request->productId))
       {
           session()->forget('cart-'.$request->productId);
           return response()->json([
               'message'=>"<p class='alert-success'> محصول با موفقیت حذف شد</p>",
               'Success'=>true,

           ]);
       }
       else
       {
           return response()->json([
               'message'=>"<p class='alert-success'> محصول یافت نشد</p>",
               'Success'=>false,
           ]);

       }

        return response([
            'msg' => 'removed',
            'cart' => Cart::getCart()
        ], 200);
    }
    public function CartCount()
    {
        $temp=0;
        $products=Product::all();
        foreach ($products as $product)
        {
            if(session()->has('cart-'.$product->id))
            {
                $temp+=1;
            }
        }
        return $temp;
    }
}
