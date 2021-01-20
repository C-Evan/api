<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'modelo_equipo'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
