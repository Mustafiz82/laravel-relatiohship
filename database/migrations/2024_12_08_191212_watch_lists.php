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
        Schema::create('watch_lists', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Watch list name
            $table->text('description')->nullable(); // Optional description of the watch list
            $table->foreignId('watch_sellerrr_id')->constrained('watch_sellers'); // Foreign key reference to `watch_sellers` table without cascade delete
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
