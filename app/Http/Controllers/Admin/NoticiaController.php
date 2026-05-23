<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Str;

class NoticiaController extends Controller
{
        // LISTAR
    public function index(Request $request)
    {
        $noticias = Noticia::with('categoria')
            ->when($request->buscar, fn($q) =>
                $q->where('titulo','like','%'.$request->buscar.'%')
            )
            ->latest()
            ->paginate(10);

        return view('admin.noticias.index', compact('noticias'));
    }

    // FORM CREAR
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.noticias.create', compact('categorias'));
    }

    // GUARDAR
   public function store(Request $request)
{
   $data = $request->validate([

        'titulo' => 'required',

        'descripcion' => 'required',

        'imagen' => 'required|image',

        'categoria_id' => 'required'

    ]);

    // IMAGEN

    if ($request->hasFile('imagen')) {

        $imagen = time().'_'.$request->imagen->getClientOriginalName();

        $request->imagen->move(

            public_path('uploads/noticias'),

            $imagen

        );

        $data['imagen'] = $imagen;
    }

    // SLUG

    $data['slug'] = Str::slug($request->titulo);

    // SEO

    $data['meta_title'] =
        $request->meta_title ?? $request->titulo;

    $data['meta_description'] =
        $request->meta_description ?? null;

    $data['meta_keywords'] =
        $request->meta_keywords ?? null;

    // ESTADO

    $data['activo'] = $request->has('activo');

    // GUARDAR

    Noticia::create($data);

    return redirect()
        ->route('admin.noticias.index');
}

    // FORM EDITAR
    public function edit($id)
    {
        $noticia = Noticia::findOrFail($id);
        $categorias = Categoria::all();

        return view('admin.noticias.edit', compact('noticia','categorias'));
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $noticia = Noticia::findOrFail($id);

    $data = $request->validate([

        'titulo' => 'required',

        'descripcion' => 'required',

        'imagen' => 'nullable|image',

        'categoria_id' => 'required'

    ]);

    // IMAGEN

    if ($request->hasFile('imagen')) {

        // ELIMINAR IMAGEN ANTERIOR

        $rutaImagen = public_path(
            'uploads/noticias/'.$noticia->imagen
        );

        if (
            $noticia->imagen &&
            File::exists($rutaImagen)
        ) {

            File::delete($rutaImagen);

        }

        // GUARDAR NUEVA IMAGEN

        $imagen = time().'_'.$request->imagen->getClientOriginalName();

        $request->imagen->move(

            public_path('uploads/noticias'),

            $imagen

        );

        $data['imagen'] = $imagen;
    }

    // SEO

    $data['slug'] = Str::slug($request->titulo);

    $data['meta_title'] =
        $request->meta_title ?? $request->titulo;

    $data['meta_description'] =
        $request->meta_description ?? null;

    $data['meta_keywords'] =
        $request->meta_keywords ?? null;

    // ESTADO

    $data['activo'] = $request->has('activo');

    // ACTUALIZAR

    $noticia->update($data);

    return redirect()
        ->route('admin.noticias.index')
        ->with(
            'success',
            'Noticia actualizada correctamente'
        );
    }

    // ELIMINAR
    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();

        return back()->with('success','Noticia eliminada');
    }
}
