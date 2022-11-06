<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'username'=>'morteza emamverdi',
           'email'=>'morteza@yahoo.com',
           'password'=>Hash::make('12345678'),
            'phone'=>'09154868372'
        ]);
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'super_admin',
            'display_name' => 'سوپر ادمین',
            'description' => 'سوپر ادمین کلی سیستم',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('role_user')->insert([
            'user_id'=>1,
            'role_id'=>1,
            'user_type'=>User::class,
        ]);
    }
}
