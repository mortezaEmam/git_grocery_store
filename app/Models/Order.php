<?php

namespace App\Models;

use App\Custom\IErrorMessage;
use App\Custom\IOrder;
use App\Events\CartCreate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function transaction()
    {
        return $this->hasOne(Transcation::class,'order_id');
    }

    public function MessageError()
    {
        abort(403);
    }

   static function SetCartForUser()
    {
        try
        {
            $user = Auth::user();
            CartCreate::dispatch($user);
        }
        catch (\Exception $Ex)
        {
            self::MessageError();
        }

    }
}
