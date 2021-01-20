<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicion;

class MedicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Medicion::all();
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
        Medicion::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Medicion Cargada Correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Medicion::with('estudio')
            ->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicion $medicion)
    {
        $input = $request->all();
        $medicion->update($input);
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
        Medicion::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Eliminado Correctamente'
        ], 200);
    }
}
