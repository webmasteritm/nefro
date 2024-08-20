<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trabajacv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajaConNosotros', function(Blueprint $table){
            $table->bigIncrements('id');
            $table-> string("nombre");
            $table-> string("fecha");
            $table-> string("correo");
            $table-> string("telefono");
            $table-> string("comentario");
            $table-> string("documento");
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
        Schema::dropIfExists('trabajaConNosotros');
    }
}
