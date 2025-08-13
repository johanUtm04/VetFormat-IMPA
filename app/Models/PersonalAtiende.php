<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalAtiende extends Model
{
    protected $table = 'personal_atiende';
    public $timestamps = false;

    protected $fillable = [
        'Nombres', 'A_Paterno', 'A_Materno'
    ];

    //Llave foranea conexion con Reporte
    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}
