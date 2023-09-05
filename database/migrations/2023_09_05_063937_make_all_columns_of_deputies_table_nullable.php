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
        Schema::table('deputies', function (Blueprint $table){
            $table->string('fullname_tm', 500)->nullable()->change();
            $table->string('fullname_en', 500)->nullable()->change();
            $table->string('fullname_ru', 500)->nullable()->change();
            $table->string('birth_year_tm')->nullable()->change();
            $table->string('birth_year_ru')->nullable()->change();
            $table->string('birth_year_en')->nullable()->change();
            $table->string('position_tm', 1000)->nullable()->change();
            $table->string('position_ru', 1000)->nullable()->change();
            $table->string('position_en', 1000)->nullable()->change();
            $table->mediumText('biography_tm')->nullable()->change();
            $table->mediumText('biography_ru')->nullable()->change();
            $table->mediumText('biography_en')->nullable()->change();
            $table->string('email',500)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
