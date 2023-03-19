<?php

namespace App\Models;

use App\Custom\IErrorMessage;
use App\Custom\IOrderDetaile;
use App\Events\CartDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetaile extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

   static function SetCartToOrder(Cart $cart)
    {
        if (filled($cart))
        {
            CartDetail::dispatch($cart);
        }
        else
        {
            self::MessageError();
        }
    }
    public function MessageError()
    {
        abort(403, 'no find your cart');
    }
}
