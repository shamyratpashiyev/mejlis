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
        Schema::create('tkm_state_symbols', function (Blueprint $table) {
            $table->id();
            $table->string('flag_title_tm',500);
            $table->string('flag_title_ru',500);
            $table->string('flag_title_en',500);
            $table->string('flag_img', 500);
            $table->mediumText('flag_text_tm');
            $table->mediumText('flag_text_ru');
            $table->mediumText('flag_text_en');

            $table->string('emblem_title_tm',500);
            $table->string('emblem_title_ru',500);
            $table->string('emblem_title_en',500);
            $table->string('emblem_img', 500);
            $table->mediumText('emblem_text_tm');
            $table->mediumText('emblem_text_ru');
            $table->mediumText('emblem_text_en');

            $table->string('anthem_description_title_tm',500);
            $table->string('anthem_description_title_ru',500);
            $table->string('anthem_description_title_en',500);
            $table->mediumText('anthem_description_text_tm');
            $table->mediumText('anthem_description_text_ru');
            $table->mediumText('anthem_description_text_en');

            $table->string('anthem_title_tm',500);
            $table->string('anthem_title_ru',500);
            $table->string('anthem_title_en',500);
            $table->mediumText('anthem_text_tm');
            $table->mediumText('anthem_text_ru');
            $table->mediumText('anthem_text_en');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkm_state_symbols');
    }
};
