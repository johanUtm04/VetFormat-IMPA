<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleReporte   extends Model
{
    protected $table = 'detalle_reporte';
    public $timestamps = false;

    protected $fillable = [
        'Medio', 'Asunto', 'Motivo'
    ];
    
    //Llave foranea conexion con Reporte
    public function reportes(){
    return $this->hasMany(Reporte::class);
    }
}