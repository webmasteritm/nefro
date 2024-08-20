<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetallesActividad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_actividad', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('id_calendario');
            $table->unsignedBigInteger('id_calendario');
            $table->foreign('id_calendario')->references('id')->on('calendario_actividades')->onDelete('cascade');    
            $table->string('descripcion');
            $table->string('calendario');
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
        Schema::dropIfExists('detalles_actividad');
    }
}

