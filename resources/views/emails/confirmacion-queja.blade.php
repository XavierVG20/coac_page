@php
    $cedula = $queja->dni;
    $maskdni = substr($cedula, 0, 3) . '****' . substr($cedula, -3);
@endphp
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Confirmación de Recepción</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f6f9;
    font-family:Arial, Helvetica, sans-serif;
">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table width="700" cellpadding="0" cellspacing="0" style="
                        background:#ffffff;
                        margin:30px auto;
                        border-radius:12px;
                        overflow:hidden;
                        box-shadow:0 2px 10px rgba(0,0,0,.1);
                    ">

                    <!-- HEADER -->
                    <tr>
                        <td align="center" style="
                                background:#4B5563;
                                padding:30px;
                            ">

                            <img src="{{ $message->embed(public_path('uploads/institucional/1778456487_logo-1.png')) }}"
                                width="350" alt="Logo">




                        </td>
                    </tr>

                    <!-- TITULO -->
                    <tr>
                        <td style="padding:35px;">

                            <h2 style="
                                color:#333;
                                margin-bottom:20px;
                            ">
                                Confirmación de Recepción
                            </h2>

                            <p>
                                Estimado(a):
                                <strong>{{ $queja->nombre }}</strong>
                            </p>

                            <p>



                                Hemos recibido el consentimiento de forma expresa, libre y voluntaria,
                                específica, informada e inequívoca, conforme al marco jurídico vigente,
                                para el tratamiento de sus Datos Personales y comerciales.
                            </p>

                        </td>
                    </tr>

                    <!-- CÓDIGO -->
                    <tr>
                        <td align="center">

                            <div style="
                                background:#fff8e1;
                                border:2px dashed #D4A017;
                                padding:20px;
                                margin:0 35px;
                                border-radius:10px;
                            ">

                                <h3 style="
                                    margin:0;
                                    color:#D4A017;
                                ">
                                    Código de Caso
                                </h3>

                                <h1 style="
                                    margin:10px 0;
                                    color:#333;
                                    letter-spacing:3px;
                                ">
                                    QR-{{ str_pad($queja->id, 6, '0', STR_PAD_LEFT) }}
                                </h1>

                            </div>

                        </td>
                    </tr>

                    <!-- DATOS -->
                    <tr>
                        <td style="padding:35px;">

                            <table width="100%" cellpadding="10" cellspacing="0" style="
                                    border-collapse:collapse;
                                ">

                                <tr style="background:#f8f9fa;">
                                    <td><strong>Fecha</strong></td>
                                    <td>{{ $queja->created_at->format('d/m/Y') }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Hora</strong></td>
                                    <td>{{ $queja->created_at->format('H:i:s') }}</td>
                                </tr>

                                <tr style="background:#f8f9fa;">
                                    <td><strong>Tipo</strong></td>
                                    <td>{{ ucfirst($queja->tipo) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Identificación</strong></td>
                                    <td>{{ $maskdni }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Canal </strong></td>
                                    <td>Portal Web</td>
                                </tr>
                                <tr>
                                    <td><strong>IP</strong></td>
                                    <td>{{ $queja->ip}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Agencia</strong></td>
                                    <td>{{ $queja->agencia }}</td>
                                </tr>

                                <tr style="background:#f8f9fa;">
                                    <td><strong>Asunto</strong></td>
                                    <td>{{ $queja->asunto }}</td>
                                </tr>

                                <tr>
                                    <td><strong>Estado</strong></td>
                                    <td>
                                        <span style="
                                            background:#198754;
                                            color:white;
                                            padding:5px 12px;
                                            border-radius:20px;
                                        ">
                                            Recibido
                                        </span>
                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>

                    <!-- MENSAJE -->
                    <tr>
                        <td style="padding:0 35px 35px 35px;">

                            <div style="
                                background:#f8f9fa;
                                border-left:5px solid #D4A017;
                                padding:20px;
                            ">

                                <h4>Detalle registrado</h4>

                                <p>
                                    {{ $queja->mensaje }}
                                </p>

                            </div>

                        </td>
                    </tr>

                    <!-- AVISO -->
                    <tr>
                        <td style="padding:0 35px 35px 35px;">

                            <p>
                                Nuestro equipo revisará su solicitud y dará
                                seguimiento conforme a los procedimientos
                                institucionales establecidos.
                            </p>

                            <p>
                                Le recomendamos conservar el código de caso
                                para futuras consultas.
                            </p>

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td align="center" style="
                                background:#1f2937;
                                color:white;
                                padding:30px;
                            ">

                            <h3 style="margin:0;">
                                Cooperativa de Ahorro y Crédito Pujilí Ltda.
                            </h3>

                            <p style="margin:10px 0;">
                                La Cooperativa del Pueblo
                            </p>

                            <p style="
                                color:#cbd5e1;
                                font-size:13px;
                            ">
                                Este correo fue generado automáticamente.
                                Por favor no responda a este mensaje.
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>