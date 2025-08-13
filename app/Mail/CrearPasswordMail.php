<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class CrearPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $url = url('/crear-password/' . $this->user->password_token);

        return $this->markdown('emails.crear_password')
                    ->subject('Crea tu contraseña para el sistema')
                    ->with([
                        'url' => $url,
                        'nombre' => $this->user->nombre,
                    ]);
    }
}
