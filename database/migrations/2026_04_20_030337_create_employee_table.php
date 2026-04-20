<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id('emp_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('emp_email')->unique();
            $table->integer('age');
            $table->foreignId('store_id')
                  ->nullable()
                  ->constraint(table: 'stores', column: 'store_id');
            $table->date('date_hired');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_employee');
    }
};
