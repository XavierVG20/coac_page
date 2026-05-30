<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmacionQuejaMail;
use App\Mail\NuevaQuejaMail;
use App\Mail\SolicitudNoProcesadaMail;
use App\Models\InformacionInstitucional;
use App\Models\Queja;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuejasController extends Controller
{
        public function index()
    {
         $info = InformacionInstitucional::first();
            $slider = Slider::where('estado', 1)
            ->where('slider_categoria_id', 10)
            ->latest()
            ->first();
        return view('quejas', compact('info', 'slider'));
    }

public function store(Request $request)
{
    // Si NO aceptó la política
    if (!$request->has('politica')) {

        // Si ingresó correo y no es anónimo
        if (
            !$request->has('anonimo') &&
            !empty($request->email)
        ) {
            Mail::to($request->email)
            ->cc('datos-personalescoacpujili@cooperativapujili.fin.ec')
                ->send(new SolicitudNoProcesadaMail($request->all()));
        }

        return back()
            ->withInput()
            ->with(
                'error',
                'Debe aceptar el Aviso de Privacidad para procesar su solicitud.'
            );
    }

    // Validaciones
    $request->validate([

        'tipo' => 'required',

        'mensaje' => 'required|min:10',

        'nombre' => $request->has('anonimo')
            ? 'nullable'
            : 'required',

        'apellidos' => $request->has('anonimo')
            ? 'nullable'
            : 'required',

        'email' => $request->has('anonimo')
            ? 'nullable'
            : 'required|email',
    ]);

    $correoDestino = env('MAIL_FROM_ADDRESS');

    $queja = Queja::create([

        'anonimo' => $request->has('anonimo'),

        'nombre' => $request->has('anonimo')
            ? null
            : $request->nombre,

        'apellidos' => $request->has('anonimo')
            ? null
            : $request->apellidos,

        'email' => $request->has('anonimo')
            ? null
            : $request->email,

        'telefono' => $request->telefono,

        'dni' => $request->identificacion,

        'tipo' => $request->tipo,

        'agencia' => $request->agencia,

        'asunto' => $request->asunto,

        'mensaje' => $request->mensaje,

        'acepta_politica' => true,

        'ip' => $request->ip(),

        'user_agent' => $request->userAgent(),

        'fecha_aceptacion' => now(),

        'estado' => 'Pendiente',
    ]);

    // Correo institucional
    Mail::to($correoDestino)
        ->send(new NuevaQuejaMail($queja));

    // Confirmación al usuario
    if (
        !$queja->anonimo &&
        !empty($queja->email)
    ) {
        Mail::to($queja->email)
            ->cc('datos-personalescoacpujili@cooperativapujili.fin.ec')
            ->send(new ConfirmacionQuejaMail($queja));
    }

    return back()->with(
        'success',
        'Su solicitud fue registrada correctamente.'
    );
}
}
