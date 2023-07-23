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
        Schema::create('langs', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('label');
            $table->boolean('is_active')->default(true);
        });

        DB::table('langs')->insert([
            ['code' => 'tm', 'label' => 'Türkmençe'],
            ['code' => 'ru', 'label' => 'Русский'],
            ['code' => 'en', 'label' => 'English'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langs');
    }
};
