<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cadena_id');
            // $table->foreign('cadena_id')->references('id')->on('cadenas');
            $table->unsignedBigInteger('locacion_id');
            // $table->foreign('locacion_id')->references('id')->on('locations');
            $table->string('nombre_hotel');
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
        Schema::dropIfExists('hotels');
    }
}
