<?php

namespace App\Http\Controllers;

use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;

class AvidoPDController extends Controller
{
    public function index()  {
         $info = InformacionInstitucional::first();
          $slider = Slider::where('estado', 1)
            ->where('slider_categoria_id', 11)
            ->latest()
            ->first();
        return view('aviso_privacidad', compact('info', 'slider'));
    }
}
