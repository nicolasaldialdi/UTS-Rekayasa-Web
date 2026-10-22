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
        Schema::create('sports', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('category');       // Pastikan kolom ini ada
    $table->string('equipment');      // Pastikan kolom ini ada
    $table->text('rules');            // Pastikan kolom ini ada
    $table->string('origin_country'); // Pastikan kolom ini ada
    $table->string('image');          // Pastikan kolom ini ada
    $table->text('description');      // Pastikan kolom ini ada
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};
