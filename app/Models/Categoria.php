<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Categoria extends Model
{
    protected $fillable = ['nombre','slug'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($c) {
            $c->slug = Str::slug($c->nombre);
        });
    }
}
