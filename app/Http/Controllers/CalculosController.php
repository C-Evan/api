<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Medicion;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    public function media($id){

        $a = DB::table('mediciones')->select('primer_manana_pas')
                ->where('estudio_id', $id)
                ->orderBy('fecha_hora', 'desc')
                ->limit('6')
                ->get();

        $b = DB::table('mediciones')->select('primer_noche_pas')
                ->where('estudio_id', $id)
                ->orderBy('fecha_hora', 'desc')
                ->limit('6')
                ->get();
        
        $c = ($a->sum('primer_manana_pas')+$b->sum('primer_noche_pas'));
        $c1 = $c / 6;

        $d = DB::table('mediciones')->select('primer_manana_pad')
            ->where('estudio_id', $id)
            ->orderBy('fecha_hora', 'desc')
            ->limit('6')
            ->get();

        $e = DB::table('mediciones')->select('primer_noche_pad')
            ->where('estudio_id', $id)
            ->orderBy('fecha_hora', 'desc')
            ->limit('6')
            ->get();

        $f = ($d->sum('primer_manana_pad')+$e->sum('primer_noche_pad'));
        $f1 = $f / 6;

        return response()->json([
            'pas' => $c1,
            'pad' => $f1
            ]);

    }
}
