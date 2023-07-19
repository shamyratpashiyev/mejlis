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
        Schema::create('deputy_committee', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deputy_id')->references('id')->on('deputies')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('committee_id')->references('id')->on('committees')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deputies_committees_pivot');
    }
};
