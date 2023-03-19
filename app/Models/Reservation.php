<?php

namespace App\Models;

use App\Custom\IReservation;
use App\Events\WarehouseDetaileSold;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class  Reservation extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

}
