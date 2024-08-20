<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcategoria extends Model
{
    use HasFactory;
    protected $table = 'blog_categorias';
    protected $primaryKey = "id";
    protected $fillable = [
        'categoria',
       
        

    ];
}