<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class storesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('stores')->insert([
            [
                'store_code' => 'S101', 
                'store_name' => 'CitiMatina', 
                'location_address' => 'Quimpo Blvd, Ecolan, Davao City', 
                'manager_id' => 2, 
                'is_active' => true, 
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
