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
        Schema::create('tono_muscular', function (Blueprint $table) {
            $table->id();
            $table->string('espasticidad_mmss',2);
            $table->string('espasticidad_mmii',2);
            $table->string('rigidez_mmss',2);
            $table->string('rigidez_mmii',2);
            $table->string('tronco_hiper',2);
            $table->string('flacidez_mmss',2);
            $table->string('flacidez_mmii',2);
            $table->string('atronio_mmss',2);
            $table->string('atronio_mmii',2);
            $table->string('tronco_hipo',2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tono_muscular');
    }
};
