<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use User;

class pageController extends Controller
{
    public function nuevouser (Request $request){
   	
    	$request-> validate ([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $new_us = new App\Usuario;
        $new_us->nombre = $request->nombre;
        $new_us->apellido = $request->apellido;
        $new_us->password = $request->password;
        $new_us->email = $request->email;

        $new_us->save();

        return back()->with('mensaje', 'Agregado correctamente');
        
    }
   
  public function mostrar (){
        $users= App\Usuario::all();
    	//$users= App\Usuario::paginate(3);
    	return view ('admin/usuarios/mostrar', compact ('users'));
    }

    public function detalle($id){
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


    public function matem(){
        return view('matem');
    }

}
