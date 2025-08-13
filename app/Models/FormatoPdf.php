<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class FormatoPdf extends Model
{
    use HasFactory;

    protected $table = 'formatos_en_pdf';  

    protected $fillable = [
        'nombre_formato',
        'archivo',
        'user_id',
        'capture_data_id', 

    ];
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

public function captureData()
{
    return $this->belongsTo(CaptureData::class, 'capture_data_id');
}


}
