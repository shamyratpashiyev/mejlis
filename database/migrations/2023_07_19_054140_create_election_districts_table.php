<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('election_districts', function (Blueprint $table) {
            $table->id();
            $table->string('name_tm', 1000);
            $table->string('name_ru', 1000);
            $table->string('name_en', 1000);
            $table->integer('district_number');
            $table->mediumText('borders_tm');
            $table->mediumText('borders_ru');
            $table->mediumText('borders_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('election_districts');
    }
};
