<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudio;

class EstudioController extends Controller
{

     public function index()
    {
        // return Estudio::all();
    }

    public function update(Request $request, Estudio $estudio)
    {
        $input = $request->all();
        $estudio->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Estudio actualizado correctamente'
        ], 200);
    }

    public function show($id)
    {
        return Estudio::with('paciente', 'profesional')
            ->findOrFail($id);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Estudio::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Estudio Agregado correctamente'
        ], 200);
    }

    public function destroy($id)
    {
        Estudio::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Estudio Eliminado Correctamente'
        ], 200);
    }
}
