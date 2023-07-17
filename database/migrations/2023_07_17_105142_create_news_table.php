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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title_tm');
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('description_tm');
            $table->text('description_ru');
            $table->text('description_en');
            $table->timestamp('event_date');
            $table->string('image');
            $table->foreignId('category_id')->nullable()->references('id')->on('news_categories')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
