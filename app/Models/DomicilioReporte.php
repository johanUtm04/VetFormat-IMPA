<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DomicilioReporte  extends Model 
{

    protected $table = 'domicilio_reporte';
    public $timestamps = false;

    protected $fillable = [
    'Domicilio', 'Colonia','CP', 'Estado', 'Ciudad', 'Telefono', 'Entre_calles', 'Referencias'
    ];

    //Llave foranea conexion con Reporte
    public function reportes(){
    return $this->hasMany(Reporte::class);
    }
} 