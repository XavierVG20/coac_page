<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacionInstitucional extends Model
{
       protected $table = "informacion_institucionals";
    protected $fillable = [
    'nombre',
    'descripcion',
    'vision',
    'mision',
    'direccion',
    'telefono',
    'email',
    'imagen',
    'meta_title',
    'meta_description',
    'og_image',
];
}
