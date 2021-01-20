<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profesional;
use App\Paciente;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    // profesionales
    public function registroProfesional(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        Profesional::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Profesional creado correctamente'
        ], 200);
    }

    public function loginProfesional(Request $request){

        $profesional = Profesional::whereEmail($request->email)->first();
        if(!is_null($profesional) && Hash::check($request->password, $profesional->password)){

            $token = $profesional->createToken('Cardiologia')->accessToken;

            return response()->json([
                'res' => true,
                'token' => $token,
                'message' => 'Logueado'
            ], 200);   
        } else {

            return response()->json([
                'res' => true,
                'message' => 'contraseña incorrecta'
            ], 200);
        }
    }

    public function logoutProfesional(){

        $profesional = auth()->user();
        $profesional->tokens->each(function($token, $key){
            $token->delete();
        });
        $profesional->save();

        return response()->json([
            'res' => true,
            'message' => 'Adios'
        ], 200); 

    }

    public function EliminarProfesional($id)
    {
        Profesional::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Eliminado Correctamente'
        ], 200);
    }

    // pacientes
    public function registroPaciente(Request $request)
    {
        
        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        Paciente::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado correctamente'
        ], 200);        
    }

    public function loginPaciente(Request $request){

        $paciente = Paciente::whereEmail($request->email)->first();
        if(!is_null($paciente) && Hash::check($request->password, $paciente->password)){

            $token = $paciente->createToken('Paciente')->accessToken;

            return response()->json([
                'res' => true,
                'token' => $token,
                'message' => 'Logueado'
            ], 200);   
        } else {

            return response()->json([
                'res' => true,
                'message' => 'contraseña incorrecta'
            ], 200);
        }
    }

    public function logoutPaciente(){

        $paciente = auth()->paciente();
        $paciente -> api_token = null;
        $paciente->save();
        return response()->json([
            'res' => true,
            'message' => 'Adios'
        ], 200);

    }
}
