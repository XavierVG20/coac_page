<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformacionInstitucional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InformacionInstitucionalController extends Controller
{
    public function index()
    {
        $info = InformacionInstitucional::first();
        return view('admin.institucional', compact('info'));
    }

    public function store(Request $request)
    {
        if (InformacionInstitucional::exists()) {
            return back()->with('error', 'Ya existe un registro');
        }

        $data = $request->validate([

            'nombre' => 'required',

            'descripcion' => 'required',

            'vision' => 'nullable',

            'mision' => 'nullable',

            'direccion' => 'nullable',

            'telefono' => 'nullable',

            'email' => 'nullable|email',

            'imagen' => 'nullable|image',

            'og_image' => 'nullable|image',

            'meta_title' => 'required',

            'meta_description' => 'required',

        ]);

        // IMAGEN PRINCIPAL

        if ($request->hasFile('imagen')) {

            $imagen = time() . '_' . $request->imagen->getClientOriginalName();

            $request->imagen->move(

                public_path('uploads/institucional'),

                $imagen

            );

            $data['imagen'] = $imagen;
        }

        // OG IMAGE

        if ($request->hasFile('og_image')) {

            $ogImage = time() . '_' . $request->og_image->getClientOriginalName();

            $request->og_image->move(

                public_path('uploads/institucional'),

                $ogImage

            );

            $data['og_image'] = $ogImage;
        }

        // GUARDAR

        InformacionInstitucional::create($data);

        return back()->with('success', 'Información guardada');

    }

    public function update(Request $request, $id)
    {
         $institucion = InformacionInstitucional::findOrFail($id);

    $data = $request->validate([

        'nombre' => 'required',

        'descripcion' => 'required',

        'vision' => 'nullable',

        'mision' => 'nullable',

        'direccion' => 'nullable',

        'telefono' => 'nullable',

        'email' => 'nullable|email',

        'imagen' => 'nullable|image',

        'og_image' => 'nullable|image',

        'meta_title' => 'required',

        'meta_description' => 'required',

    ]);

    // IMAGEN PRINCIPAL

    if ($request->hasFile('imagen')) {

        // ELIMINAR IMAGEN ANTERIOR

        $rutaImagen = public_path(
            'uploads/institucional/'.$institucion->imagen
        );

        if (
            $institucion->imagen &&
            File::exists($rutaImagen)
        ) {

            File::delete($rutaImagen);

        }

        // GUARDAR NUEVA IMAGEN

        $imagen = time().'_'.$request->imagen->getClientOriginalName();

        $request->imagen->move(

            public_path('uploads/institucional'),

            $imagen

        );

        $data['imagen'] = $imagen;
    }

    // OG IMAGE

    if ($request->hasFile('og_image')) {

        // ELIMINAR ANTERIOR

        $rutaOg = public_path(
            'uploads/institucional/'.$institucion->og_image
        );

        if (
            $institucion->og_image &&
            File::exists($rutaOg)
        ) {

            File::delete($rutaOg);

        }

        // GUARDAR NUEVA

        $ogImage = time().'_'.$request->og_image->getClientOriginalName();

        $request->og_image->move(

            public_path('uploads/institucional'),

            $ogImage

        );

        $data['og_image'] = $ogImage;
    }

    // ACTUALIZAR

    $institucion->update($data);

    return back()->with(
        'success',
        'Información actualizada correctamente'
    );
    }
}
