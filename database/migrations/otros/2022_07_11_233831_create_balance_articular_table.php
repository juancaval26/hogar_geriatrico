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
        Schema::create('balance_articular', function (Blueprint $table) {
            $table->id();
            $table->int('hombro');
            $table->int('codo');
            $table->int('muñeca');
            $table->int('dedos_manos');
            $table->int('cadera');
            $table->int('rodilla');
            $table->int('tobillo');
            $table->int('dedos_pies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_articular');
    }
};
