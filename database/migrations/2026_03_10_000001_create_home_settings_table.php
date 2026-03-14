<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_settings', function (Blueprint $table) {
            $table->id();

            // Hero Section
            $table->string('hero_title')->default('153 Kreatif');
            $table->string('hero_subtitle')->default('Integrated Event Solutions & Creative Production');
            $table->text('hero_description')->nullable();
            $table->string('hero_button_text')->default('View Portfolio');
            $table->string('hero_button_link')->default('/portfolio');
            $table->string('hero_background_image')->nullable();

            // About Preview Section
            $table->string('about_title')->default('Tentang Kami');
            $table->text('about_description')->nullable();
            $table->string('about_image')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_settings');
    }
};
