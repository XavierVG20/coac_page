<?php

namespace App\Http\Controllers;

use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
     public function index()
    {
        $info = InformacionInstitucional::first();
        $slider = Slider::where('estado', 1)
    ->where('slider_categoria_id', 4)
    ->latest()
    ->first();
        return view('servicios', compact('info', 'slider'));
    }
}
