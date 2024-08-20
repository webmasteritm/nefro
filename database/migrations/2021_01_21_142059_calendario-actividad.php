<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CalendarioActividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('calendario_actividades', function (Blueprint $table) {
    $table->bigIncrements('id');
    $table->string('actividad');
    $table->string('detalles'); 
    $table->string('fecha');
    $table->unsignedBigInteger('id_calendario');
    $table->foreign('id_calendario')->references('id')->on('calendario_meses')->onDelete('cascade');    
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

    Schema::dropIfExists('calendario_actividades');
        //
    }
}
