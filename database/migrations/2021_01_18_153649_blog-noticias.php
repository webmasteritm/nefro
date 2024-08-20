<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_noticias', function (Blueprint $table) {
            $table->bigIncrements('id_noticia');
            $table->string('nombre_noticia');
            $table->text('detalles_noticia', 1000);
            $table->string('fecha_noticia');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('blog_categorias')->onDelete('cascade');
            $table->string('imagen_principal');
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
        Schema::dropIfExists('blog_noticias');
    }
}
