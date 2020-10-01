<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function buscaPor(Request $request){
        
        $nombre= $request->get('buscarPorNombre');  
        $apellido= $request->get('buscarPorApellido');
        //dd($nombre);
        $roles= Rol::all();
        
    
        //invoco funcion scopeNombre
        $users= Usuario::nombre($nombre)->apellido($apellido)->paginate(5);

        //https://solibeth.net/laravel-6-22-filtros-de-busqueda
        //$buscar= $request->get('buscarPor');
        //dd ($buscar);
        //$tipo= $request->get('tipo');
        //$users= Usuario::buscaPor($tipo, $buscar)->paginate(5);

       return view ('usuarios.mostrarTodos', compact ('users', 'roles'));
    }

    public function mostrarTodos (){

        $users= Usuario::paginate(5);
        $roles= Rol::all();
        //dd( $users, $roles);
    	return view ('usuarios.mostrarTodos', compact ('users', 'roles'));
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
            'direccion' => 'required',
            'correo' => 'required',
            'rols_id' => 'required',
        ]);
      
        $new_us = new Usuario;
        $new_us->nombre = $request->nombre;
        $new_us->apellido = $request->apellido;
        $new_us->direccion = $request->direccion;
        $new_us->correo = $request->correo;
        $new_us->rols_id = $request->rols_id;
        $new_us->save();
        return back()->with('mensaje', 'Usuario agregado correctamente');
        
    }

   
    public function detalle_usuario($id){

        $users= Usuario::FindOrFail($id);
        $roles= Rol::all();        
        return view ('usuarios.detalle_usuario', compact('users','roles'));
    
    }  

    public function editar_usuario($id){
        $roles= Rol::all();        
        $users= Usuario::FindOrFail($id);
        return view ('usuarios.editar_usuario', compact ('users','roles'));
    }

    public function eliminar_usuario($id){
        
        $user= Usuario::FindOrFail($id);
        dd( ($id));
        $user->delete();
        
        return back()->with('mensaje', 'Usuario eliminado correctamente');    
    }

    public function actualizar_usuario (Request $request, $id){

        $user_up= Usuario::FindOrFail($id);
        $user_up->nombre = $request->nombre;
        $user_up->apellido = $request->apellido;
        $user_up->correo = $request->correo;
        $user_up->rols_id = $request->rols_id;
        $user_up->save();
        return back()->with('mensaje', 'Editado correctamente');

    }
}
