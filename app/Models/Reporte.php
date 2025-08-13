<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = 'reporte';
    public $timestamps = false;
    protected $fillable = [
        'id_per_at',
        'id_reportante',
        'id_det_rep',
        'id_dom_rep',
        'id_at_rep',
        'Fecha',
        'Recibio',
        'Envio_Evidencia',
        'Seguimiento',
        'user_id'
    ];

    public function reportante()
    {
        return $this->belongsTo(Reportante::class, 'id_reportante');
    }

    public function personalAtiende()
    {
        return $this->belongsTo(PersonalAtiende::class, 'id_per_at');
    }

    public function detalleReporte()
    {
        return $this->belongsTo(DetalleReporte::class, 'id_det_rep');
    }

    public function domicilioReporte()
    {
        return $this->belongsTo(DomicilioReporte::class, 'id_dom_rep');
    }

    public function atReporte()
    {
        return $this->belongsTo(AtReporte::class, 'id_at_rep');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
