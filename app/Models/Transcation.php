<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transcation extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public static function setStatusCartSuccess($id){
        $cart_find_id=Cart::query()->where('id',$id)->update([
            'status'=>'paid',
            'updated_at'=>now(),
        ]);

       return true;
    }
}
