@component('mail::message')
# Hola, {{ $nombre }}

Has sido registrado como médico en nuestro sistema.

Por favor, haz clic en el botón siguiente para crear tu contraseña y activar tu cuenta.

@component('mail::button', ['url' => $url])
Crear contraseña
@endcomponent

Si no solicitaste esto, puedes ignorar este correo.

Gracias,<br>
{{ config('app.name') }}
@endcomponent
