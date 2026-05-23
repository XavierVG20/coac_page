<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderCategoria extends Model
{
        protected $fillable = [
        'nombre',
        'estado'
    ];

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }
}
