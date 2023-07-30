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
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('title_tm', 1000);
            $table->string('title_ru', 1000);
            $table->string('title_en', 1000);
            $table->mediumText('description_tm');
            $table->mediumText('description_ru');
            $table->mediumText('description_en');
            $table->timestamp('published_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
