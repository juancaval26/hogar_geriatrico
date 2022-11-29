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
        Schema::create('valoracion_fisica', function (Blueprint $table) {
            $table->id();
            
            // nombre de la tabla seguido del _id para establecer foraneas
            $table->bigInteger('balance_muscular_id')->unsigned();
            $table->foreign('balance_muscular_id')->references('id')->on('balance_muscular');
            $table->bigInteger('balance_articular_id')->unsigned();
            $table->foreign('balance_articular_id')->references('id')->on('balance_articular');
            $table->bigInteger('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            // fecha actual
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
        Schema::dropIfExists('valoracion_fisica');
    }
};
