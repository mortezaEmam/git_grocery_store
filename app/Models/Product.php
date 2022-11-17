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
    public static function getImageUrl($product)
    {
        $find_image=$product->file;

        if(filled($find_image))
        {
//            dd(Storage::url($find_image->url.$find_image->name));
            $image_url=Storage::url($find_image->url.$find_image->name);

        }
        else
        {
            $image_url='';
        }

        return $image_url;
    }
    public static function getAllProducts()
    {
        return static::query()->where('status','on')->latest('created_at')->take('8')->get();
    }
}
