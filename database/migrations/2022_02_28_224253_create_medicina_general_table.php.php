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
        Schema::create('medicina_general', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->integer('edad');
            $table->string('motivo_consulta',200);
            $table->string('enfermedad_actual',200);
            $table->string('revision_sistemas',1000);
            $table->unsignedBigInteger('antecedente_medicina_id'); 
            $table->foreign('antecedente_medicina_id')->references('id')->on('antecedente_medicina');
            // crear en un array
            $table->string('documento',15);
            $table->string('lugar_documento',20);
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
        Schema::dropIfExists('medicina_general');
    }
};
