<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class AtReporte extends Model
{
    protected $table = 'at_reporte';
    public $timestamps = false;

    protected $fillable = [
        'Fecha', 'Hora_Atencion', 'Nom_Ciudadano', 'Observaciones'
    ];

    //Llave foranea conexion con Reporte
    public function reportes(){
    return $this->hasMany(Reporte::class);
    }
}
