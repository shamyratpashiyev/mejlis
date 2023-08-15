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
        Schema::create('friendship_group_deputies_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('friendship_group_id')->references('id')->on('friendship_groups')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('deputy_id')->references('id')->on('deputies')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friendship_group_deputies_pivot');
    }
};
