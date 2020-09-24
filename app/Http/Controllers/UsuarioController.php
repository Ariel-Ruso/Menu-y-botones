<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function buscaXnombre(Request $request){
        $nombre= $request->get('buscarPor');
        $user= Usuario::where ('nombres','like',"%$nombre%")->paginate(5);
        return view ('usuarios.detalle_usuario', compact ('user'));
    }

    public function crear_usuario(){
        $roles= new Rol;
        $roles= Rol::all();
        return view ('usuarios.crear_usuario', compact ('roles'));
    }

    public function crear_usuario2 (Request $request){
        //return $request-> all();
   	
    	$request-> validate ([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required',
            //'rols_id' => 'required',
        ]);
      
        $new_us = new Usuario;
        $new_us->Nombre = $request->nombre;
        $new_us->Apellido = $request->apellido;
        $new_us->Correo = $request->correo;

        $new_us->Rols_id = $request->rol;
        $new_us->save();
        return back()->with('mensaje', 'Usuario agregado correctamente');
        
    }

    public function mostrarTodos (){
    	$users= Usuario::paginate(5);
    	return view ('usuarios.mostrarTodos', compact ('users'));
    }

    public function detalle_usuario($id){
        
        //return $id;

        $rol= new Rol;
        $rol= Rol::id ('$id');
        return $rol;
        /*
        $users= Usuario::FindOrFail($id);
        //$rol= Rol::findorFail($id)
        
        return view ('usuarios.detalle_usuario', compact('users'));
        */
    }  

    public function editar_usuario($id){
        $users= Usuario::FindOrFail($id);
        return view ('usuarios.editar_usuario', compact ('users'));
    }

    public function eliminar_usuario($id)
    {
        $users= Usuario::FindOrFail($id);
         $users->delete();
         return back()->with('mensaje', 'Usuario eliminado correctamente');    
    }

    public function actualizar_usuario (Request $request, $id){

        $user_up= Usuario::FindOrFail($id);
        $user_up->Nombre = $request->nombre;
        $user_up->Apellido = $request->apellido;
        $user_up->Correo = $request->correo;
        $user_up->Rols_id = $request->rols_id;
        $user_up->save();
        return back()->with('mensaje', 'Editado correctamente');

    }
}
