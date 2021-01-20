<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estudio;

class Medicion extends Model
{
    protected $table = 'mediciones';

    protected $fillable = [
        'estudio_id',
        'estado',
        'fecha_hora',
        'intento',
        'primer_manana_pad',
        'primer_manana_pas',
        'segundo_manana_pad',
        'segundo_manana_pas',
        'primer_noche_pad',
        'primer_noche_pas',
        'segundo_noche_pad',
        'segundo_noche_pas'
    ];

    public function estudio() {
        return $this->belongsTo('App\Estudio', 'estudio_id');
    }
}
