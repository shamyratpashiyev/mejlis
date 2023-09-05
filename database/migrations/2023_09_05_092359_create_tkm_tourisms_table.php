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
        Schema::create('tkm_tourism', function (Blueprint $table) {
            $table->id();
            $table->string('title_tm',500);
            $table->string('title_ru',500);
            $table->string('title_en',500);
            $table->mediumText('content_tm');
            $table->mediumText('content_ru');
            $table->mediumText('content_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkm_tourism');
    }
};
