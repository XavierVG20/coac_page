<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\SliderCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::with('categoria')
                    ->latest()
                    ->get();

        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        $categorias = SliderCategoria::where('estado',1)->get();

        return view('admin.sliders.create', compact('categorias'));
    }

    public function store(Request $request)
    {
         $imagen = null;

    if($request->hasFile('imagen')){

        $imagen = time().'.'.$request->imagen->extension();

        $request->imagen->move(
            public_path('uploads/sliders'),
            $imagen
        );
    }

    Slider::create([

        'nombre' => $request->nombre,

        'slug' => Str::slug($request->nombre),

        'imagen' => $imagen,

        'estado' => $request->estado,

        'meta_title' => $request->meta_title,

        'meta_description' => $request->meta_description,

        'meta_keywords' => $request->meta_keywords,

        'slider_categoria_id' => $request->slider_categoria_id

    ]);

    return redirect()->route('admin.sliders.index');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        $categorias = SliderCategoria::where('estado',1)->get();

        return view(
            'admin.sliders.edit',
            compact('slider','categorias')
        );
    }

    public function update(Request $request, $id)
    {
$slider = Slider::findOrFail($id);

$imagen = $slider->imagen;

if($request->hasFile('imagen')){

    // ELIMINAR IMAGEN ANTERIOR

    $rutaImagen = public_path('uploads/sliders/'.$slider->imagen);

    if(File::exists($rutaImagen)){

        File::delete($rutaImagen);

    }

    // GUARDAR NUEVA IMAGEN

    $imagen = time().'.'.$request->imagen->extension();

    $request->imagen->move(

        public_path('uploads/sliders'),

        $imagen

    );
}

$slider->update([

    'nombre' => $request->nombre,

    'slug' => Str::slug($request->nombre),

    'imagen' => $imagen,

    'estado' => $request->estado,

    'meta_title' => $request->meta_title,

    'meta_description' => $request->meta_description,

    'meta_keywords' => $request->meta_keywords,

    'slider_categoria_id' => $request->slider_categoria_id

]);

return redirect()->route('admin.sliders.index');

    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        $slider->delete();

        return redirect()->back();
    }
}
