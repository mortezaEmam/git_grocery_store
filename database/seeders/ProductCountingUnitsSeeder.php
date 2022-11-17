<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCountingUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_counting_units')->insert([
            ['title'=>'عدد'],
            ['title'=>'کارتن'],
            ['title'=>'کیلو'],
            ['title'=>'گرم'],
            ['title'=>'مثقال'],
        ]);
    }
}
