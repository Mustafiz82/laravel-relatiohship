<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'seller_id' => 12 ,
            'product_name' => "Symsung s24 altra" ,
            'price' => 138000 ,
            'rating' => "5" ,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
