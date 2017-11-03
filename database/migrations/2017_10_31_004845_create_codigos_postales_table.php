<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigosPostalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigos_postales', function (Blueprint $table) {
            $table->increments('id_codigo_postal');
            $table->smallInteger('id_estado');
            $table->string('estado', 35);
            $table->smallInteger('id_municipio');
            $table->string('municipio', 60);
            $table->string('ciudad', 100);
            $table->string('zona', 100);
            $table->string('codigo_postal');
            $table->string('asentamiento',70);
            $table->string('tipo',50);

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
        Schema::dropIfExists('codigos_postales');
    }
}
