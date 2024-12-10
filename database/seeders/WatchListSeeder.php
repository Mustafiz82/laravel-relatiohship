<?php

namespace Database\Seeders;

use App\Models\WatchList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            [
                'name' => 'casio Official Store',
                'description' => 'Premium luxury watches.',
                'watch_sellerrr_id' => 2, // seller_id remains the same
            ],
            [
                'name' => 'Omega Watch Shop',
                'description' => 'Exclusive Omega watches collection.',
                'watch_sellerrr_id' => 2, // seller_id remains the same
            ],
            [
                'name' => 'sakan Watches',
                'description' => 'Affordable and reliable timepieces.',
                'watch_sellerrr_id' => 3, // seller_id remains the same
            ],
        ];
        

        foreach ($data as $item) {
            WatchList::create($item);
        }
    }
}
