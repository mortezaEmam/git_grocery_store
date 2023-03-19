<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WareHouseDetaile extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
    public function unit()
    {
        return $this->belongsTo(ProductCountingUnit::class,'product_counting_unit_id');
    }
    public function warehouse()
    {
        return $this->belongsTo(WareHouse::class);
    }
}
