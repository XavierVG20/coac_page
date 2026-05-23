<?php

namespace App\Http\Controllers;

use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;

class CreditosController extends Controller
{
    public function index()
    {
        $info = InformacionInstitucional::first();
        $sliders = Slider::where('estado', 1)
            ->where('slider_categoria_id', 2)
            ->latest()
            ->get();
        $metaDescription = $sliders
           
            ->pluck('meta_description')
            ->filter()
            ->implode(' - ');

        $metaKeywords = $sliders
           
            ->pluck('meta_keywords')
            ->filter()
            ->implode(', ');

               $slider = Slider::where('estado', 1)
    ->where('slider_categoria_id', 5)
    ->latest()
    ->first();

        return view('creditos', compact('info', 'sliders','slider',  'metaDescription', 'metaKeywords', ));
    }

}
