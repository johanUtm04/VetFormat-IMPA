<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reportante extends Model
{
    protected $table = 'reportante';
    public $timestamps = false;

    protected $fillable = [
        'Nombres', 'A_Paterno', 'A_Materno', 'Domicilio', 'Colonia', 'CP', 'Estado', 'Ciudad_Localidad', 'Telefono'
    ];

    //Llave Foranea conexxion con Reporte
    public function reportes()
    {
    return $this->hasMany(Reporte::class);
    }
}
