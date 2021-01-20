<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Paciente;

class Localidad extends Model
{
    protected $table = 'localidades';

    // public function paciente() {
    //     return $this->hasOne('App\Paciente', 'localidad_id');
    // }

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
