<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\InformacionInstitucional;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Agent\Agent;
class ContactoController extends Controller
{

    public function index()
    {
        $info = InformacionInstitucional::first();
        $slider = Slider::where('estado', 1)
            ->where('slider_categoria_id', 9)
            ->latest()
            ->first();
        return view('contactos', compact('info', 'slider'));
    }
    public function enviar(Request $request)
    {
        $agent = new Agent();

        // Guardar en BD
        $contacto = Contacto::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request->dni,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
            'cedula' => $request->cedula,
            'ip' => $request->ip(),
            'dispositivo' => $agent->isMobile() ? 'Móvil' : 'Computador',
            'acepta_politica' => $request->has('politica')
        ]);

        // Datos
        $fecha = Carbon::now()->locale('es')->isoFormat('dddd D [de] MMMM [de] YYYY');
        $hora = now()->format('H:i:s');
        $ip = $request->ip();
        $dispositivo = $agent->isMobile() ? 'Dispositivo móvil' : 'Computador';
        $maskdni = str_repeat('*', strlen($request->dni) - 3) . substr($request->dni, -3);
        $correoDestino = config('custom.correo_destino');

        // HTML
        $html = "
    <p><strong>Código Secuencial:</strong> {$contacto->id}</p>
    <p><strong>Fecha:</strong> $fecha</p>

    <p>Señor(a)<br>
    <strong>{$request->nombre}</strong></p>

    <p>
    
    Hemos recibido el consentimiento de forma expresa, libre y voluntaria, especifica, informada e inequívoca, conforme al marco 
    jurídico vigente, para el tratamiento de sus Datos Personales y comerciales el día $fecha., de conformidad con lo dispuesto por 
    la Ley de Protección de Datos Personales. 
    A continuación, se detallan los datos que fueron capturados y registrados al momento de aceptar el consentimiento:
    </p>

    <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>
        <tr><td><strong>Fecha</strong></td><td>$fecha</td></tr>
        <tr><td><strong>Hora</strong></td><td>$hora</td></tr>
        <tr><td><strong>ID Registro</strong></td><td>{$contacto->id}</td></tr>
        <tr><td><strong>Identificación</strong></td><td>{$maskdni}</td></tr>
        <tr><td><strong>IP</strong></td><td>$ip</td></tr>
        <tr><td><strong>Canal</strong></td><td>Portal WEB</td></tr>
        <tr><td><strong>Dispositivo</strong></td><td>$dispositivo</td></tr>
        <tr><td><strong>Dispositivo</strong></td><td>$request->asunto</td></tr>
        <tr><td><strong>Dispositivo</strong></td><td>$request->mensaje</td></tr>

    </table>

    <p>
    Para más información, revise el aviso de privacidad institucional.
    </p>

    <p>Atentamente,<br><strong>COAC PUJILÍ</strong></p>
    ";

        // ENVÍO (A USUARIO + A TI)
        $correoDestino = env('MAIL_FROM_ADDRESS');
        Mail::html($html, function ($mail) use ($request, $correoDestino) {
            $mail->to($request->email) // usuario
                ->cc($correoDestino)  // tu correo desde .env
                ->subject('Confirmación de consentimiento de datos');
        });

        return back()->with('success', 'Mensaje enviado correctamente');
    }
}
