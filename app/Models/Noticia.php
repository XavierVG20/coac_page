<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Noticia extends Model
{
    protected $fillable = [
        'titulo','slug','descripcion','imagen',
        'categoria_id','meta_title','meta_description', 'meta_keywords',
        'og_image','activo'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($n) {
            $n->slug = Str::slug($n->titulo);
        });

        static::updating(function ($n) {
            $n->slug = Str::slug($n->titulo);
        });
    }
}
