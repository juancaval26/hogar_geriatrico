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
        Schema::create('antecedente_medicina', function (Blueprint $table) {
            $table->id();
            $table->string('patologicos',100);
            $table->string('alergicos',100);
            $table->string('toxicos',100);
            $table->string('farmacologicos',100);
            $table->string('examen_fisico',100);
            $table->string('signos_vitales',100);
            $table->string('cabeza_cuello',100);
            $table->string('cardiopulmonar',100);
            $table->string('abdominal',100);
            $table->string('genitourinario',100);
            $table->string('extremidades',100);
            $table->string('neurologico',100);
            $table->string('laboratorio',100);
            $table->string('analisis',100);
            $table->string('diagnostico',100);
            $table->string('tratamiento',100);
            $table->string('firma',20);
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
        Schema::dropIfExists('antecedente_medicina');
        
    }
};
