<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    protected $table = 'actividades';
    protected $primaryKey = "id";
    protected $fillable = [
        'nombre_actividad',
        'descripcion_actividad',
        'sede_id',
        'year',
        'mes',
        'imagen_principal'
    ];
}
