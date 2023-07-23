<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('velayats', function (Blueprint $table) {
            $table->id();
            $table->string('name_tm');
            $table->string('name_ru');
            $table->string('name_en');
            $table->timestamps();
        });

        DB::table('velayats')->insert([
            ['name_tm' => 'Aşgabat', 'name_ru' => 'Ашгабат', 'name_en' => 'Aşgabat'],
            ['name_tm' => 'Ahal', 'name_ru' => 'Ахал', 'name_en' => 'Ahal'],
            ['name_tm' => 'Mary', 'name_ru' => 'Мары', 'name_en' => 'Mary'],
            ['name_tm' => 'Lebap', 'name_ru' => 'Лебап', 'name_en' => 'Lebap'],
            ['name_tm' => 'Daşoguz', 'name_ru' => 'Дашогуз', 'name_en' => 'Daşoguz'],
            ['name_tm' => 'Balkan', 'name_ru' => 'Балкан', 'name_en' => 'Balkan'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('velayats');
    }
};
