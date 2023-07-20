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
            $table->string('name_tm', 500);
            $table->string('name_ru', 500);
            $table->string('name_en', 500);
            $table->integer('district_id');
            $table->text('borders_tm');
            $table->text('borders_ru');
            $table->text('borders_en');
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
