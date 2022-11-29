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
        Schema::create('medicamentos_jornada', function (Blueprint $table) {
            $table->id();
            $table->string('medicamento',30);
            $table->string('dosis',50);
            $table->string('via',15);
            $table->string('jornada',25);
            $table->string('observaciones',1000);
            $table->date('fecha_revision');
            $table->string('firma_auxiliar',20);
            $table->unsignedBigInteger('kardex_id'); 
            $table->foreign('kardex_id')->references('id')->on('kardex');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamentos_jornada');
    }
};
