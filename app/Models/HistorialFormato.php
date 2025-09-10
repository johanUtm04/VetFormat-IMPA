<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialFormato extends Model
{
    use HasFactory;

    protected $table = 'historial_formatos';

    protected $fillable = [
        'user_id',
        'nombre_formato',
        'datos_generales',
        'datos_formato',
    ];
}
