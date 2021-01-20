<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Paciente extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    protected $table = 'pacientes';

    protected $fillable = [
        'nombre',
        'apellido',
        'sexo',
        'telefono',
        'email',
        'fecha_nacimiento',
        'pais',
        'localidad_id',
        'password'
    ];

    // de muchos a uno
    // public function estudi(){
    //     return $this->belongsTo('App\Estudio', 'paciente_id');
    // }

    public function localidad() {
        return $this->belongsTo('App\Localidad', 'localidad_id');
    }

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
