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
        Schema::table('codes', function (Blueprint $table) {
            $table->string('title_tm', 1000)->nullable()->change();
            $table->string('title_ru', 1000)->nullable()->change();
            $table->string('title_en', 1000)->nullable()->change();
            $table->mediumText('description_tm')->nullable()->change();
            $table->mediumText('description_ru')->nullable()->change();
            $table->mediumText('description_en')->nullable()->change();
            $table->timestamp('published_date')->nullable()->change();
        });

        Schema::table('laws', function (Blueprint $table) {
            $table->string('title_tm', 1000)->nullable()->change();
            $table->string('title_ru', 1000)->nullable()->change();
            $table->string('title_en', 1000)->nullable()->change();
            $table->mediumText('description_tm')->nullable()->change();
            $table->mediumText('description_ru')->nullable()->change();
            $table->mediumText('description_en')->nullable()->change();
            $table->timestamp('published_date')->nullable()->change();
        });

        Schema::table('mejlis_decrees', function (Blueprint $table) {
            $table->string('title_tm', 1000)->nullable()->change();
            $table->string('title_ru', 1000)->nullable()->change();
            $table->string('title_en', 1000)->nullable()->change();
            $table->mediumText('description_tm')->nullable()->change();
            $table->mediumText('description_ru')->nullable()->change();
            $table->mediumText('description_en')->nullable()->change();
            $table->timestamp('published_date')->nullable()->change();
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
