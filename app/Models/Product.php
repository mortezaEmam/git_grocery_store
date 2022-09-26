<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
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
    public static function getImageUrl($product)
    {
        $find_image=$product->file;

        if(filled($find_image))
        {
            $image_url=Storage::url($find_image->url.$find_image->name);

        }
        else
        {
            $image_url='';
        }

        return $image_url;
    }
}
