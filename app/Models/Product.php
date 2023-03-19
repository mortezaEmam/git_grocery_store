<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
   public function descriptions()
   {
       return $this->morphMany(Description::class,'descriptionable');
   }
    public  function file()
    {
        return $this->morphOne(File::class,'fileable');
    }
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function warehousedetaile()
    {
        return $this->hasMany(WareHouseDetaile::class,'product_id');
    }
    public static function  getStockwarehousedetailesId($product)
    {
       $find_stock= WareHouseDetaile::query()->where('product_id',$product)->first();
       $find_vahed=ProductCountingUnit::query()->where('id',$find_stock->product_counting_unit_id)->first();
       return ['id'=>$product,'stock'=>$find_stock->stock,'vahed'=>$find_vahed->title];
    }
    public static function getAllProducts()
    {
        return static::query()->where('status','on')->latest()->with('file')->get() ;
    }
}
