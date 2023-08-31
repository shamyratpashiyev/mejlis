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
        Schema::create('tkm_history', function (Blueprint $table) {
            $table->id();
            $table->text('title_tm');
            $table->text('title_ru');
            $table->text('title_en');
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
        Schema::dropIfExists('tkm_histories');
    }
};
