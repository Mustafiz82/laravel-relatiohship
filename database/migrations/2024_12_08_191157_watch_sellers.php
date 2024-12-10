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
        Schema::create('watch_sellers' , function(Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Seller's name
            $table->string('email')->unique(); // Seller's email (unique)
            $table->string('phone_number'); // Seller's phone number
            $table->text('address'); // Seller's address
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
