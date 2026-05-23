<?php

namespace App\Http\Controllers;

use App\Models\Agencias;
use App\Models\Noticia;
use App\Models\Slider;
use App\Models\SliderCategoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $agencias = Agencias::count();

        $sliders = Slider::count();

        $sliderCategorias = SliderCategoria::count();

        $noticias = Noticia::count();

        $ultimasAgencias = Agencias::latest()
                            ->take(5)
                            ->get();

        $ultimosSliders = Slider::with('categoria')
                            ->latest()
                            ->take(5)
                            ->get();

        // SEO

        $seoTitles = Slider::whereNotNull('meta_title')->count();

        $seoDescriptions = Slider::whereNotNull('meta_description')->count();

        $seoKeywords = Slider::whereNotNull('meta_keywords')->count();

        return view('home', compact(

            'agencias',
            'sliders',
            'sliderCategorias',
            'noticias',
            'ultimasAgencias',
            'ultimosSliders',
            'seoTitles',
            'seoDescriptions',
            'seoKeywords'

        ));
   
    }
        public function servicios()
    {
        return view('servicios');
    }
}
