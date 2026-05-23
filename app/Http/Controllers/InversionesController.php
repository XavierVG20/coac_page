<?php

namespace App\Http\Controllers;

use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;

class InversionesController extends Controller
{
     public function index()
    {
        $info = InformacionInstitucional::first();
          $slider = Slider::where('estado', 1)
    ->where('slider_categoria_id', 6)
    ->latest()
    ->first();
        return view('inversiones_captaciones', compact('info','slider'));
    }
}
