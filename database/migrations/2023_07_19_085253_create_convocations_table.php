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
        Schema::create('convocations', function (Blueprint $table) {
            $table->id();
            $table->string('name_tm');
            $table->string('name_ru');
            $table->string('name_en');
            $table->integer('convocation_number');
            $table->timestamps();
        });

        DB::table('convocations')->insert([
            ['name_tm' => 'Türkmenistanyň Mejlisiniň VII çagyrylyşy', 'name_ru' => 'Седьмой созыв Меджлиса Туркменистана', 
            'name_en' => 'Seventh convocation of Mejlis of Turkmenistan', 'convocation_number' => 7]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convocations');
    }
};
