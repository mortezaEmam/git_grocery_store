<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Transcation extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public static function setStatusCartSuccess($cart_id){
        $cart_find_id=Cart::query()->where('id',$cart_id)->where('user_id',Auth::id())->update([
            'status'=>'paid',
            'updated_at'=>now(),
        ]);

       return true;
    }
}
