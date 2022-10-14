<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function getSubCategories(Category $category)
    {
        return  Category::query()->where('parent_id', '=' , $category->id)->get();
    }
    public static function getAllCategories()
    {
        return static::query()->where('status','on')->get()->sortBy('sort');
    }
}
