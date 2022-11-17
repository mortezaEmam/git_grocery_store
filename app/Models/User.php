<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait,SoftDeletes;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
  protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function comments()
//    {
//        return $this->hasMany(Comment::class);
//    }
//    public  function file()
//    {
//        return $this->morphOne(File::class,'fileable');
//    }
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withPivot('user_type');
    }
    public function cart()
    {
        return $this->hasOne(Cart::class,'user_id');
    }
    public function warehouse()
    {
        return $this->hasOne(WareHouse::class,'origin_id');
    }
}
