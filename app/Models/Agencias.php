<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencias extends Model
{
    protected $fillable = [
    'nombre',
    'slug',
    'ciudad',
    'direccion',
    'telefono',
    'correo',
    'horario',
    'socios',
    'creditos',
    'imagen',
    'mapa_google',
    'meta_title',
    'meta_description',
    'meta_keywords',
    'estado'
];
}
