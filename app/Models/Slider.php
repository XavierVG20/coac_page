<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
     protected $fillable = [

        'nombre',
        'slug',
        'estado',
        'imagen',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slider_categoria_id'

    ];

    public function categoria()
    {
        return $this->belongsTo(
            SliderCategoria::class,
            'slider_categoria_id'
        );
    }
}
