<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogImagen extends Model
{
    use HasFactory;
    protected $table = 'blog_imagenes';
    protected $primaryKey = "id";
    protected $fillable = [
        'url',
        'id_noticia',
        

    ];
}
