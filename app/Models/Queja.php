<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queja extends Model
{
    protected $fillable = [

        'anonimo',
        'nombre',
        'apellidos',
        'email',
        'telefono',
        'dni',
        'tipo',
        'agencia',
        'asunto',
        'mensaje',
        'ip',
        'user_agent',
        'fecha_aceptacion',
        'estado'

    ];
}
