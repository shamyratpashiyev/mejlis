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
        Schema::table('friendship_groups', function (Blueprint $table) {
            $table->string('country_1_tm', 500)->nullable();
            $table->string('country_1_ru', 500)->nullable();
            $table->string('country_1_en', 500)->nullable();
            
            $table->string('country_2_tm', 500)->nullable();
            $table->string('country_2_ru', 500)->nullable();
            $table->string('country_2_en', 500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('friendship_groups', function (Blueprint $table) {
            //
        });
    }
};
