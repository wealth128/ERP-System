<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('employee')->insert([
            [
                'first_name' => 'BabyBisbs', 
                'last_name' => 'Paldo!', 
                'emp_email' => 'paldo!babybis@email.paldo', 
                'age' => 16, 
                'store_id' => 1, 
                'date_hired' => '2025-05-10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => 'Aslan', 
                'last_name' => 'Great', 
                'emp_email' => 'aslan@email.paldo', 
                'age' => 18, 
                'store_id' => 1, 
                'date_hired' => '2025-10-20',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        
    }
}
