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
            $table->smallInteger('id_estado')->nullable();
            $table->string('estado', 35)->nullable();
            $table->smallInteger('id_municipio')->nullable();
            $table->string('municipio', 60)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('zona', 100)->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('asentamiento',70)->nullable();
            $table->string('tipo',50)->nullable();

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
