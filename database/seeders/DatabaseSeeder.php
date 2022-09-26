<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         $user=\App\Models\User::query()->create([
             'username' => 'morteza',
             'email' => 'morteza72@gmail.com',
             'password'=>Hash::make('123456'),
             'phone'=>'09154868372',
         ]);

        \App\Models\Role::query()->create([
            'name'=>'admin',
        ]);
        \App\Models\Role::query()->create([
            'name'=>'user',
        ]);
        $user->roles()->attach([1=>['user_type'=>'admin']]);
    }
}
