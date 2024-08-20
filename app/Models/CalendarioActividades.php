<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarioActividades extends Model
{
    use HasFactory;
    protected $table = 'calendario_actividades';
    protected $primaryKey = "id";
    protected $fillable = [
        'actividad',
        'detalles',
        'fecha',
        'id_calendario',
        
        

    ];
}
