<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Paciente;
use App\User;

class Estudio extends Model
{
    protected $table = 'estudios';

    protected $fillable = [
        'paciente_id',
        'profesional_id',
        'pago_id',
        'estado',
        'inicio_am',
        'fin_am',
        'inicio_pm',
        'fin_pm',
        'equipo_validado',
        'modelo_equipo',
        'tratamiento',
     
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function paciente() {
        return $this->belongsTo('App\Paciente', 'paciente_id');
    }
    public function profesional() {
        return $this->belongsTo('App\User', 'profesional_id');
    }
}
