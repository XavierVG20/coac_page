<?php

namespace App\Http\Controllers;

use App\Models\Agencias;
use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $info = InformacionInstitucional::first();

        $sliders = Slider::where('estado', 1)
            ->where('slider_categoria_id', 1)
            ->latest()
            ->get();

       
    $totalSocios = Agencias::sum('socios');

    $totalCreditos = Agencias::sum('creditos');
    $totalAgencias = Agencias::where('estado',1)->count();

        // SEO DESDE EL PRIMER SLIDER

        $metaDescription = $sliders->pluck('meta_description')
            ->filter()
            ->implode(' - ');

        $metaKeywords = $sliders->pluck('meta_keywords')
            ->filter()
            ->implode(', ');

        return view('welcome', compact(
            'info',
            'sliders',
            'metaDescription',
            'metaKeywords',
            'totalSocios',
            'totalCreditos',
            'totalAgencias',



        ));
    }
}
