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
        Schema::dropIfExists('tkm_history');
        Schema::dropIfExists('tkm_area');
        Schema::dropIfExists('tkm_population');
        Schema::dropIfExists('tkm_state_symbols');
        Schema::dropIfExists('tkm_constitution');
        Schema::dropIfExists('tkm_state_holidays');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
