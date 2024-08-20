<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes_pacientes';
    protected $primaryKey = "id";
    protected $fillable = [
        'url',
        'id_actividades',
        

    ];
}
