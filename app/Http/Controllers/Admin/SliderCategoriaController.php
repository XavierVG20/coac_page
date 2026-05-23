<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderCategoria;
use Illuminate\Http\Request;

class SliderCategoriaController extends Controller
{
    public function index()
    {
        $categorias = SliderCategoria::latest()->get();

        return view(
            'admin.slider-categorias.index',
            compact('categorias')
        );
    }

    public function create()
    {
        return view('admin.slider-categorias.create');
    }

    public function store(Request $request)
    {
        SliderCategoria::create([

            'nombre' => $request->nombre,

            'estado' => $request->estado

        ]);

        return redirect()->route('admin.slider-categorias.index');
    }

    public function edit($id)
    {
        $categoria = SliderCategoria::findOrFail($id);

        return view(
            'admin.slider-categorias.edit',
            compact('categoria')
        );
    }

    public function update(Request $request, $id)
    {
        $categoria = SliderCategoria::findOrFail($id);

        $categoria->update([

            'nombre' => $request->nombre,

            'estado' => $request->estado

        ]);

        return redirect()->route('slider-categorias.index');
    }

    public function destroy($id)
    {
        $categoria = SliderCategoria::findOrFail($id);

        $categoria->delete();

        return redirect()->back();
    }
}
