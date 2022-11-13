<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title'=>'تست',
            'parent_id'=>'0',
            'sort'=>'1',
            'status'=>'on',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
