<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return User::all();
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // en caso de que quiera añadir un profesional pro esta ruta.
    public function store(Request $request)
    {
        // $input = $request->all();
        // User::create($input);
        // return response()->json([
        //     'res' => true,
        //     'message' => 'Profesional Creado Correctamente'
        // ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        User::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Profesional Eliminado Correctamente'
        ], 200);
    }
}
