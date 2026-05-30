<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Solicitud no procesada</title>
</head>

<body style="
    font-family: Arial, sans-serif;
    background:#f4f4f4;
    padding:20px;
">

    <table width="700" align="center"
        style="
            background:#fff;
            border-radius:10px;
            overflow:hidden;
        ">

        <tr>
            <td align="center" style="
                                background:#4B5563;
                                padding:30px;
                            ">

                            <img src="{{ $message->embed(public_path('uploads/institucional/1778456487_logo-1.png')) }}"
                                width="350" alt="Logo">




                        </td>
        </tr>

        <tr>
            <td style="padding:30px;">

                <h3>
                    Solicitud no procesada
                </h3>

                <p>
                    Estimado(a)
                    <strong>
                        {{ $datos['nombre'] ?? 'Usuario' }}
                    </strong>
                </p>

                <p>
                    Su solicitud no pudo ser procesada debido a que
                    no aceptó el Aviso de Privacidad y Tratamiento
                    de Datos Personales.
                </p>

                <p>
                    Para continuar con el trámite deberá ingresar
                    nuevamente al formulario y aceptar las condiciones.
                </p>

                <hr>

                <p>
                    <strong>Asunto:</strong>
                    {{ $datos['asunto'] ?? 'N/A' }}
                </p>

                <p>
                    <strong>Tipo:</strong>
                    {{ ucfirst($datos['tipo'] ?? 'N/A') }}
                </p>

                <hr>

                <p>
                    Este correo es únicamente informativo.
                </p>

            </td>
        </tr>

        <tr>
            <td style="
                background:#374151;
                color:white;
                text-align:center;
                padding:20px;
            ">

                © {{ date('Y') }}
                Cooperativa Pujilí

            </td>
        </tr>

    </table>

</body>

</html>