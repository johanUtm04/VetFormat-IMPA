<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'nombre',
        'correo',
        'especialidad',
        'estado',
    ];

public function user()
{
    return $this->hasOne(User::class, 'email', 'correo');
}

}
