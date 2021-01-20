<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicion;
use App\Estudio;

class InsertController extends Controller
{
    public function carga(Request $request, Medicion $medicion)
    {
        
        // $desde = is_int( Estudio::select('inicio_am')->get() );
        // $hasta = is_int( Estudio::select('fin_am')->get() );

        // $desde0 = is_int( Estudio::select('inicio_pm')->get() );
        // $hasta0 = is_int( Estudio::select('fin_pm')->get() );
        $desde = 8;
        $hasta = 12;

        $desde0 = 18;
        $hasta0 = 22;

        $hora_actual = intval(date("H"));
        if ($hora_actual >= $desde && $hora_actual < $hasta || $hora_actual >= $desde0 && $hora_actual < $hasta0) {

            if(date("m")){
            
                $input = $request->all();
                Medicion::create($input);
                return response()->json([
                    'res' => true,
                    'message' => 'Medicion añadida Correctamente'
                ], 200);

            } else {
                
                $input = $request->all();
                Medicion::create($input);
                return response()->json([
                    'res' => true,
                    'message' => 'Medicion Cargada Correctamente'
                ], 200);
            }
        } else {
            return response()->json([
                'res' => true,
                'message' => 'ño'
            ], 200);
        }
    }

    public function hoy(Request $request){

    }
}
