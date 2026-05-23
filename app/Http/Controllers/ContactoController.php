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

       

        // Datos
        $fecha = Carbon::now()->locale('es')->isoFormat('dddd D [de] MMMM [de] YYYY');
        $hora = now()->format('H:i:s');
        $ip = $request->ip();
        $dispositivo = $agent->isMobile() ? 'Dispositivo móvil' : 'Computador';
        $maskdni = str_repeat('*', strlen($request->dni) - 3) . substr($request->dni, -3);
        $urlPrivacidad = route('aviso_privacidad');
       $correoDestino = env('MAIL_FROM_ADDRESS');

       

if ($request->has('politica')) {

    // =========================
    // MENSAJE SI ACEPTA
    // =========================
  $contacto = Contacto::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dni' => $request->dni,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
            'cedula' => $request->cedula,
            'ip' => $ip,
            'dispositivo' => $agent->isMobile() ? 'Móvil' : 'Computador',
            'acepta_politica' => $request->has('politica'),
            'fecha_consentimiento' => now(),
        ]);

    $html = "
    <p><strong>Código Secuencial:</strong> {$contacto->id}</p>
    <p><strong>Fecha:</strong> $fecha</p>

    <p>Señor(a)<br>
    <strong>{$request->nombre}</strong></p>

    <p>
    Hemos recibido el consentimiento de forma expresa, libre y voluntaria,
    específica, informada e inequívoca, conforme al marco jurídico vigente,
    para el tratamiento de sus Datos Personales y comerciales.
    </p>

    <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width:100%;'>
        <tr><td><strong>Fecha</strong></td><td>$fecha</td></tr>
        <tr><td><strong>Hora</strong></td><td>$hora</td></tr>
        <tr><td><strong>ID Registro</strong></td><td>{$contacto->id}</td></tr>
        <tr><td><strong>Identificación</strong></td><td>{$maskdni}</td></tr>
        <tr><td><strong>IP</strong></td><td>$ip</td></tr>
        <tr><td><strong>Canal</strong></td><td>Portal WEB</td></tr>
        <tr><td><strong>Dispositivo</strong></td><td>$dispositivo</td></tr>
        <tr><td><strong>Asunto</strong></td><td>{$request->asunto}</td></tr>
        <tr><td><strong>Mensaje</strong></td><td>{$request->mensaje}</td></tr>
    </table>

    <p>
    Para más información, revise el aviso de privacidad institucional.
    </p>

    <p>Atentamente,<br><strong>COAC PUJILÍ</strong></p>
    ";

    Mail::html($html, function ($mail) use ($request, $correoDestino) {
        $mail->to($request->email)
            ->cc($correoDestino)
            ->subject('Confirmación de consentimiento de datos');
    });

} else {

    // =========================
    // MENSAJE SI NO ACEPTA
    // =========================
  $contacto = Contacto::create([
            'nombre' => 'S/N',
            'apellido' => 'S/N',
            'dni' => $maskdni ,
            'email' => $request->email,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
            'cedula' => $request->cedula,
            'ip' => $ip,
            'dispositivo' => $agent->isMobile() ? 'Móvil' : 'Computador',
            'acepta_politica' => $request->has('politica'),
            'fecha_consentimiento' => now(),
        ]);
    $htmlNoAcepta = "
    <p>Estimado(a) <strong>{$request->nombre}</strong>,</p>

    <p>
    Le informamos que no fue posible completar el registro de su solicitud,
    debido a que no se otorgó el consentimiento para el tratamiento de datos personales,
    conforme a lo establecido en el <a href='{$urlPrivacidad}' target='_blank'>
    Aviso de Privacidad y Tratamiento de Datos Personales
</a>
    y la normativa legal vigente.
    </p>

    <p>
    Para continuar con el proceso, es necesario aceptar las políticas de tratamiento
    de datos personales de la institución.
    </p>

    <p>
    Si tiene alguna consulta, puede comunicarse con nuestros canales oficiales.
    </p>

    <p>Atentamente,<br><strong>COAC PUJILÍ</strong></p>
    ";

    Mail::html($htmlNoAcepta, function ($mail) use ($request, $correoDestino) {
        $mail->to($request->email)
            ->cc($correoDestino)
            ->subject('Aviso de protección de datos personales');
    });
}

return back()->with('success', 'Proceso realizado correctamente');
    }
}
