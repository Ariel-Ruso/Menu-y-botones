<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function crear_usuario(){
        return view ('usuarios.crear');
    }

    public function crear_usuario2 (Request $request){
        //return $request-> all();
   	
    	$request-> validate ([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Correo' => 'required',
            'Rol' => 'required',
        ]);
      
        $new_us = new Usuario;
        $new_us->Nombre = $request->nombre;
        $new_us->Apellido = $request->apellido;
        $new_us->Rol = $request->rol;
        $new_us->Correo = $request->correo;
        $new_us->save();

        return back()->with('mensaje', 'Usuario agregado correctamente');
        
    }

    public function mostrarTodos (){
        //$users= Usuario::all();
    	$users= Usuario::paginate(5);
    	return view ('usuarios/mostrarTodos', compact ('users'));
    }

    public function detalle_usuario($id){
    	$users= Usuario::FindOrFail($id);
		return view ('usuarios/detalle', compact('users'));
    }  

    public function editar_usuario($id){
        $users= Usuario::FindOrFail($id);
        return view ('usuarios/editar_usuario', compact ('users'));
    }
}
