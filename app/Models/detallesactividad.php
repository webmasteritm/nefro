<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detallesactividad extends Model
{
    use HasFactory;
    protected $table = 'detalles_actividad';
    protected $primaryKey = "id";
    protected $fillable = [
        'id_calendario',
        'descripcion',
       
        





    ];
}
