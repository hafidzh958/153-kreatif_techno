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
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('name');         // Contoh: "Event Production"
        $table->text('description');    // Penjelasan detail layanan
        $table->string('icon')->nullable(); // Untuk menyimpan nama icon (misal: "bi bi-calendar")
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
