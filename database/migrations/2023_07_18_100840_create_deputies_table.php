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
        Schema::create('deputies', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('position_tm', 500);
            $table->string('position_ru', 500);
            $table->string('position_en', 500);
            $table->mediumText('biography_tm');
            $table->mediumText('biography_ru');
            $table->mediumText('biography_en');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deputies');
    }
};
