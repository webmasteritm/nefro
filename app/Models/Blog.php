<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog_noticias';
    protected $primaryKey = 'id_noticia';
    protected $fillable = [
        'nombre_noticia',
        'detalles_noticia',
        'fecha_noticia',
        'id_categoria',
        'imagen_principal',

        



    ];
    

}
