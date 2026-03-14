<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('home_services', function (Blueprint $table) {
            $table->boolean('is_published')->default(false)->after('order');
        });

        Schema::table('home_projects', function (Blueprint $table) {
            $table->boolean('is_published')->default(false)->after('order');
        });
    }

    public function down(): void
    {
        Schema::table('home_services', function (Blueprint $table) {
            $table->dropColumn('is_published');
        });

        Schema::table('home_projects', function (Blueprint $table) {
            $table->dropColumn('is_published');
        });
    }
};
