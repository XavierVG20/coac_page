<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agencias;
use Illuminate\Http\Request;
use Str;

class AgenciasController extends Controller
{
    public function index()
    {
        $agencias = Agencias::latest()->get();
        return view('admin.agencias.index', compact('agencias'));
    }

    public function create()
    {
        return view('admin.agencias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required'
        ]);

        $imagen = null;

        if($request->hasFile('imagen')){
            $imagen = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('uploads/agencias'), $imagen);
        }

        Agencias::create([
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'ciudad' => $request->ciudad,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'horario' => $request->horario,
            'socios' => $request->socios,
            'creditos' => $request->creditos,
            'imagen' => $imagen,
            'mapa_google' => $request->mapa_google,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'estado' => $request->estado
        ]);

        return redirect()->route('admin.agencias.index')
            ->with('success', 'Agencia creada correctamente');
    }

    public function edit($id)
    {
        $agencia = Agencias::findOrFail($id);
        return view('admin.agencias.edit', compact('agencia'));
    }

    public function update(Request $request, $id)
    {
        $agencia = Agencias::findOrFail($id);

        $imagen = $agencia->imagen;

        if($request->hasFile('imagen')){
            $imagen = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('uploads/agencias'), $imagen);
        }

        $agencia->update([
            'nombre' => $request->nombre,
            'slug' => Str::slug($request->nombre),
            'ciudad' => $request->ciudad,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'horario' => $request->horario,
            'socios' => $request->socios,
            'creditos' => $request->creditos,
            'imagen' => $imagen,
            'mapa_google' => $request->mapa_google,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'estado' => $request->estado
        ]);

        return redirect()->route('admin.agencias.index')
            ->with('success', 'Agencia actualizada');
    }

    public function destroy($id)
    {
        $agencia = Agencias::findOrFail($id);

        $agencia->delete();

        return redirect()->back()
            ->with('success', 'Agencia eliminada');
    }
}
