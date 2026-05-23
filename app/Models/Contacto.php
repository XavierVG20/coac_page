<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
    'nombre',
    'apellido',
    'dni',
    'email',
    'asunto',
    'mensaje',
    'ip',
    'dispositivo',
    'acepta_politica',
    'fecha_consentimiento'
];
 protected $casts = [
        'acepta_politica' => 'boolean',
        'fecha_consentimiento' => 'datetime',
    ];
}
