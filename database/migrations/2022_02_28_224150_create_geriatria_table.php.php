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
        Schema::create('geriatria', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_actual');
            $table->string('impresion_general',100);
            $table->string('nombre',30);
            $table->string('apellido',30);
            $table->string('sexo',15);
            $table->integer('edad');
            $table->date('fecha_nacimiento');
            // crear select de estado civil
            $table->string('estado_civil',20);
            $table->string('ocupacion',30);
            $table->integer('identificacion');
            $table->string('rh',5);
            $table->string('etnia',20);
            $table->string('desplazado',10);
            $table->string('ciudad',30);
            $table->string('responsable',100);
            $table->unsignedBigInteger('antecedente_geriatria_id'); 
            $table->foreign('antecedente_geriatria_id')->references('id')->on('antecedente_geriatria');
            // otra manera de indicar una llave foranea
            // $table->foreignId('antecedente_geriatria_id')->constrained('antecedente_geriatria');

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
        Schema::dropIfExists('geriatria');
        
    }
};
