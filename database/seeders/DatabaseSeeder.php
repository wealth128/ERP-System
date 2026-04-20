<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema; // <--- Add this line

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            storesSeeder::class,
            employeeSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
