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

$fecha = Carbon::now()
    ->locale('es')
    ->isoFormat('dddd D [de] MMMM [de] YYYY');

$hora = now()->format('H:i:s');
$ip = $request->ip();
$dispositivo = $agent->isMobile() ? 'Móvil' : 'Computador';

$dni = $request->dni ?? '';

// =========================
// DNI SEGURO (NO ROMPE)
// =========================
if (strlen($dni) >= 3) {
    $maskdni = str_repeat('*', strlen($dni) - 3) . substr($dni, -3);
} else {
    $maskdni = $dni;
}

$urlPrivacidad = route('aviso_privacidad');
$correoDestino = env('MAIL_FROM_ADDRESS'); // correo institucional

// =========================
// VALIDACIÓN BÁSICA
// =========================
if (!$correoDestino) {
    return back()->with('error', 'MAIL_FROM_ADDRESS no configurado');
}

if ($request->has('politica')) {

    // =========================
    // GUARDAR DATOS
    // =========================
    $contacto = Contacto::create([
        'nombre' => $request->nombre ?? 'S/N',
        'apellido' => $request->apellido ?? 'S/N',
        'dni' => $dni,
        'email' => $request->email,
        'asunto' => $request->asunto,
        'mensaje' => $request->mensaje,
        'cedula' => $request->cedula,
        'ip' => $ip,
        'dispositivo' => $dispositivo,
        'acepta_politica' => true,
        'fecha_consentimiento' => now(),
    ]);

    // =========================
    // HTML CORREO (ACEPTA)
    // =========================

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
    // =========================
    // ENVÍO SEGURO
    // =========================
    Mail::html($html, function ($mail) use ($request, $correoDestino) {

        $mail->to($request->email)
            ->cc($correoDestino) // 🔥 COPIA SEGURA (NO CC)
            ->subject('Confirmación de consentimiento');

    });

} else {

    // =========================
    // GUARDAR DATOS (NO ACEPTA)
    // =========================
    $contacto = Contacto::create([
        'nombre' => 'S/N',
        'apellido' => 'S/N',
        'dni' => $maskdni,
        'email' => $request->email,
        'asunto' => $request->asunto,
        'mensaje' => $request->mensaje,
        'cedula' => $request->cedula,
        'ip' => $ip,
        'dispositivo' => $dispositivo,
        'acepta_politica' => false,
        'fecha_consentimiento' => now(),
    ]);

    // =========================
    // HTML CORREO (NO ACEPTA)
    // =========================
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

    // =========================
    // ENVÍO SEGURO
    // =========================
    Mail::html($htmlNoAcepta, function ($mail) use ($request, $correoDestino) {

        $mail->to($request->email)
            ->cc($correoDestino) // 🔥 IMPORTANTE
            ->subject('Aviso de privacidad');

    });
}

return back()->with('success', 'Proceso realizado correctamente');
    }
}
