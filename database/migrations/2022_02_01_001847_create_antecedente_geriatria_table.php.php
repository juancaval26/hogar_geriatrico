<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedente_geriatria', function (Blueprint $table) {
            $table->id();
            // se debe crear un select, para seleccionar si es personal o familiar el antecedente
            $table->string('hepatitis',20);
            $table->string('tuberculosis',20);
            $table->string('diabetes',20);
            $table->string('hipertension_arterial',20);
            $table->string('infarto_miocardio',20);
            $table->string('ACV',20);
            $table->string('osteoartritis',20);
            $table->string('intervencion_quirurgica',20);
            $table->string('accidentes',20);
            $table->string('cancer',20);
            $table->string('medicamento_frecuente',20);
            $table->string('hospitalizado',20);
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antecedente_geriatria');
        
    }
};
