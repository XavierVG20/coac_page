<h2>Nueva solicitud recibida</h2>

<p><strong>Tipo:</strong> {{ $queja->tipo }}</p>

<p><strong>Agencia:</strong> {{ $queja->agencia }}</p>

<p><strong>Asunto:</strong> {{ $queja->asunto }}</p>

<p><strong>Mensaje:</strong></p>

<p>{{ $queja->mensaje }}</p>

@if(!$queja->anonimo)

<p><strong>Nombre:</strong>
{{ $queja->nombre }} {{ $queja->apellidos }}</p>

<p><strong>Email:</strong>
{{ $queja->email }}</p>

@endif

<p><strong>IP:</strong>
{{ $queja->ip }}</p>

<p><strong>Fecha:</strong>
{{ $queja->created_at }}</p>