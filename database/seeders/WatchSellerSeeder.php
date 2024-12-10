<?php

namespace Database\Seeders;

use App\Models\WatchSeller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WatchSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Rolex Official Store',
                'email' => 'rolex@example.com',
                'phone_number' => '1234567890',
                'address' => 'jummapara',
                                
            ],
            [
                'name' => 'Omega Watch Shop',
                'email' => 'omega@example.com',
                'phone_number' => '9876543210',
                'address' => 'rangpur',
                                
            ],
            [
                'name' => 'Casio Watches',
                'email' => 'casio@example.com',
                'phone_number' => '1122334455',
                'address' => 'bangladesh',
                                
            ],
        ];

        foreach ($data as $item) {
            WatchSeller::create($item);
        }
    }
}
