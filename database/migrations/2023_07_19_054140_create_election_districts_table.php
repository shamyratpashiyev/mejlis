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
        Schema::create('election_districts', function (Blueprint $table) {
            $table->id();
            $table->string('name_tm', 500);
            $table->string('name_ru', 500);
            $table->string('name_en', 500);
            $table->integer('district_id');
            $table->string('hq_name_tm', 1000);
            $table->string('hq_name_ru', 1000);
            $table->string('hq_name_en', 1000);
            $table->text('borders_tm');
            $table->text('borders_ru');
            $table->text('borders_en');
            $table->timestamps();
        });

        DB::table('election_districts')->insert([
            [
                'name_tm' => '1-nji «Garaşsyzlyk» saýlaw okrugy', 'name_ru' => '1-nji «Garaşsyzlyk» saýlaw okrugy', 'name_en' => '1-nji «Garaşsyzlyk» saýlaw okrugy',
                'hq_name_tm' => 'Türkmenistanyň Daşary işler ministrliginiň Halkara gatnaşyklar instituty', 'hq_name_ru' => 'Türkmenistanyň Daşary işler ministrliginiň Halkara gatnaşyklar instituty', 'hq_name_en' => 'Türkmenistanyň Daşary işler ministrliginiň Halkara gatnaşyklar instituty',
                'borders_tm' => "Berkararlyk etrabynyň Gurbansoltan eje şaýolunyň S.Türkmenbaşy şaýoly bilen kesişýän çatrygyndan başlap, Gurbansoltan eje şaýolunyň ugry bilen B.Annanow köçesine çenli, şol ýerden B.Annanow köçesiniň ugry bilen A.Nyýazow şaýoluna çenli, A.Nyýazow şaýolunyň ugry bilen A.Garlyýew köçesine çenli, A.Garlyýew köçesiniň ugry bilen Galkynyş köçesine çenli, Galkynyş köçesiniň ugry bilen S.Türkmenbaşy şaýoluna çenli,  S.Türkmenbaşy şaýolunyň ugry bilen Gurbansoltan eje şaýoluna çenli araçäkleri öz içine alýar", 
                'borders_ru' => 'Berkararlyk etrabynyň Gurbansoltan eje şaýolunyň S.Türkmenbaşy şaýoly bilen kesişýän çatrygyndan başlap, Gurbansoltan eje şaýolunyň ugry bilen B.Annanow köçesine çenli, şol ýerden B.Annanow köçesiniň ugry bilen A.Nyýazow şaýoluna çenli, A.Nyýazow şaýolunyň ugry bilen A.Garlyýew köçesine çenli, A.Garlyýew köçesiniň ugry bilen Galkynyş köçesine çenli, Galkynyş köçesiniň ugry bilen S.Türkmenbaşy şaýoluna çenli,  S.Türkmenbaşy şaýolunyň ugry bilen Gurbansoltan eje şaýoluna çenli araçäkleri öz içine alýar', 
                'borders_en' => 'Berkararlyk etrabynyň Gurbansoltan eje şaýolunyň S.Türkmenbaşy şaýoly bilen kesişýän çatrygyndan başlap, Gurbansoltan eje şaýolunyň ugry bilen B.Annanow köçesine çenli, şol ýerden B.Annanow köçesiniň ugry bilen A.Nyýazow şaýoluna çenli, A.Nyýazow şaýolunyň ugry bilen A.Garlyýew köçesine çenli, A.Garlyýew köçesiniň ugry bilen Galkynyş köçesine çenli, Galkynyş köçesiniň ugry bilen S.Türkmenbaşy şaýoluna çenli,  S.Türkmenbaşy şaýolunyň ugry bilen Gurbansoltan eje şaýoluna çenli araçäkleri öz içine alýar',
                'district_id' => 1,
            ]

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('election_districts');
    }
};
