<?php

namespace App\Http\Controllers;

use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Categoria;
class NoticiaFrontController extends Controller
{
    public function index(Request $request)
    {
        $info = InformacionInstitucional::first();
        $noticias = Noticia::with('categoria')
            ->where('activo', 1)
            ->when(
                $request->buscar,
                fn($q) =>
                $q->where('titulo', 'like', '%' . $request->buscar . '%')
            )
            ->when(
                $request->categoria,
                fn($q) =>
                $q->where('categoria_id', $request->categoria)
            )
            ->latest()
            ->paginate(6);

        $categorias = Categoria::all();

          $slider = Slider::where('estado', 1)
            ->where('slider_categoria_id', 7)
            ->latest()
            ->first();
        return view('noticias', compact('noticias', 'slider','categorias', 'info'));
    }

    public function show(Request $request, $slug)
    {

        // Buscamos la noticia por el slug y verificamos que esté activa
        $noticia = Noticia::where('slug', $slug)
            ->where('activo', 1)
            ->firstOrFail(); // Si no existe, lanza error 404
        $info = InformacionInstitucional::first();
        $categorias = Categoria::all();
        $noticias = Noticia::with('categoria')
            ->where('activo', 1)
            ->when(
                $request->buscar,
                fn($q) =>
                $q->where('titulo', 'like', '%' . $request->buscar . '%')
            )
            ->when(
                $request->categoria,
                fn($q) =>
                $q->where('categoria_id', $request->categoria)
            )
            ->latest()
            ->paginate(6);
      
        // Retornamos la vista (asegúrate de que la ruta de la vista sea correcta)

        return view('noticias_show', compact('noticia', 'info', 'noticias', 'categorias'));
    }
}
