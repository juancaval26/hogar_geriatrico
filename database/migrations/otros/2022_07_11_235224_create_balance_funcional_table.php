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
        Schema::create('balance_funcional', function (Blueprint $table) {
            $table->id();
            $table->string('hombro',2);
            $table->string('codo',2);
            $table->string('muñeca',2);
            $table->string('dedos_manos',2);
            $table->string('cadera',2);
            $table->string('rodilla',2);
            $table->string('tobillo',2);
            $table->string('dedos_pies',2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_funcional');
    }
};
