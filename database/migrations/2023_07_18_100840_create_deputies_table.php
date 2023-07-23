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
            $table->string('fullname_tm', 500);
            $table->string('fullname_en', 500);
            $table->string('fullname_ru', 500);
            $table->string('birth_year_tm');
            $table->string('birth_year_ru');
            $table->string('birth_year_en');
            $table->string('position_tm', 1000);
            $table->string('position_ru', 1000);
            $table->string('position_en', 1000);
            $table->mediumText('biography_tm');
            $table->mediumText('biography_ru');
            $table->mediumText('biography_en');
            $table->string('email',500);
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
