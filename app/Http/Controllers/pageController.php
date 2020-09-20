<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use User;

class pageController extends Controller
{
    public function crear_usuario(){
        return view ('usuarios.crear');
    }
    
    public function crear_usuario2 (Request $request){
   	
    	$request-> validate ([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Correo' => 'required',
            'Rol' => 'required',
        ]);
        
        $new_us = new App\Usuario;
        $new_us->Nombre = $request->Nombre;
        $new_us->Apellido = $request->apellido;
        $new_us->Rol = $request->rol;
        $new_us->Correo = $request->correo;
        $new_us->save();

        return back()->with('mensaje', 'Usuario agregado correctamente');
        
    }
   
  public function mostrar (){
        $users= App\Usuario::all();
    	//$users= App\Usuario::paginate(3);
    	return view ('usuarios/mostrar', compact ('users'));
    }

    public function detalle_usuario($id){
    	$users= App\Usuario::FindOrFail($id);
		return view ('admin/usuarios/detalle', compact('users'));
    }  

    public function editar ($id){
        $users= App\Usuario::FindOrFail($id);
        return view ('admin/usuarios/editar', compact ('users'));
    }

    public function actualizar (Request $request, $id){

        $user_up= App\Usuario::FindOrFail($id);
        
        $user_up->nombre = $request->nombre;
        $user_up->apellido = $request->apellido;
        $user_up->password = $request->password;
        $user_up->email = $request->email;

        $user_up->save();

        return back()->with('mensaje', 'Editado correctamente');

    }

    public function eliminar (Request $request, $id) {

        $user_del= App\Usuario::FindOrFail($id);
        $user_del->delete();
        
        return back()->with('mensaje', 'Eliminado correctamente');        
    }


}
