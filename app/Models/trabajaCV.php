<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabajaCV extends Model
{
    //use HasFactory;
    protected $table = 'trabajaConNosotros';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'nombre',
        'fecha',
        'correo',
        'telefono',
        'comentario',
        'documento',
    ];

}
