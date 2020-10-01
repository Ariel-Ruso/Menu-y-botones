<?php

namespace App\Http\Controllers;

use App\Articulo;
use App\Categoria;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function crear_articulo(){
        //$cates= new Categorias;
        $cates= Categoria::all();
        return view ('articulos.crear_articulo', compact ('cates'));
    }

    public function crear_articulo2 (Request $request){
       // dd( $request->file('imagen'));
        //https://www.youtube.com/watch?v=PjEutNUZjj0&ab_channel=Aprendible
        //subir imagen
        //$request->file('imagen')->store('imagenes');
    	$request-> validate ([
            'nombre' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'categorias_id' => 'required',
        ]);
      
        $cate = new Articulo;
        $cate->nombre = $request->nombre;
        $cate->cantidad = $request->cantidad;
        $cate->precio = $request->precio;
        $cate->categorias_id = $request->categorias_id;
        $cate->save();
        return back()->with('mensaje', 'Articulo agregado correctamente');
        
    }

    public function mostrarTodos (){
       
        $arts= Articulo::paginate(5);
        $arts= Articulo::all();
        $cates= Categoria::all();
        //dd($arts, $cates);
    	return view ('articulos.mostrarTodos', compact ('arts', 'cates'));
    }

    public function detalle_articulo($id){

        $art= Articulo::FindOrFail($id);
        $cates= Categoria::all();        
        return view ('articulos.detalle_articulo', compact('art','cates'));
    
    }  

    public function editar_articulo($id){
        $cates= Categoria::all();        
        $arts= Articulo::FindOrFail($id);
        return view ('articulos.editar_articulo', compact ('arts','cates'));
    }

    public function eliminar_articulo($id)
    {
        $art= Articulo::FindOrFail($id);
        $art->delete();
        return back()->with('mensaje', 'Articulo eliminado correctamente');    
    }

    public function actualizar_articulo (Request $request, $id){

        $art_up= Articulo::FindOrFail($id);
        $art_up->nombre = $request->nombre;
        $art_up->cantidad = $request->cantidad;
        $art_up->precio = $request->precio;
        $art_up->categorias_id = $request->categorias_id;
        $art_up->save();
        return back()->with('mensaje', 'Editado correctamente');

    }
}
