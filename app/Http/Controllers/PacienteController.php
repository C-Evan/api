<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Estudio;
use App\Localidad;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        $pacientes = Paciente::paginate(50);
        return response()->json($pacientes, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Paciente::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Paciente Agregado correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Paciente $paciente)
    // {
    //     $paciente = Paciente::with('estudy')->get();
    //     return $paciente;
    // }
    public function show($id)
    {
        return Paciente::with('localidad')
            ->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $input = $request->all();
        $paciente->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paciente::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Eliminado Correctamente'
        ], 200);
    }
}
