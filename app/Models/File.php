<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Client\Request;

class File extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function fileable()
    {
        return $this->morphTo();
    }

    public static function uploadfile($file,$path)
    {


        $name = time() . '-' . $file->getClientOriginalName();
        $file->storeAs($path, $name);
        return new File([
            'name' => $name,
            'url' => $path,

        ]);



    }




}
