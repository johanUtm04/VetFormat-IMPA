<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaptureData extends Model
{
    protected $table = 'capture_datas';  

    use HasFactory;
    protected $fillable = [
    'user_id',
    'per_nombres', 'per_apaterno', 'per_amaterno',
    'rep_nombres', 'rep_apaterno', 'rep_amaterno', 'rep_domicilio', 'rep_colonia', 'rep_cp', 'rep_estado', 'rep_ciudad', 'rep_telefono',
    'det_medio', 'det_asunto', 'det_motivo',
    'dom_domicilio', 'dom_colonia', 'dom_cp', 'dom_estado', 'dom_ciudad', 'dom_telefono', 'dom_entre_calles', 'dom_referencias',
    'at_fecha', 'at_hora_atencion', 'at_nom_ciudadano', 'at_observaciones',
    'rep_fecha', 'rep_recibio', 'rep_envio_evidencia', 'rep_seguimiento',
    'direccion', 'latitude', 'longitude',
    ];

    public function usuario()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function formatosPdf()
{
    return $this->hasMany(FormatoPdf::class, 'capture_data_id');
}
}


