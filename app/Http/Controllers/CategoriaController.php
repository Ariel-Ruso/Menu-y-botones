<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
   
    public function crear_categoria(){
        
        return view ('categorias.crear_categoria');
    }

    public function crear_categoria2 (Request $request){
        //return $request-> all();
   	
    	$request-> validate ([
            'nombre' => 'required',
            
        ]);
      
        $new_cate = new Categoria;
        $new_cate->nombre = $request->nombre;
        $new_cate->save();
        return back()->with('mensaje', 'Categoria agregada correctamente');
        
    }

    public function mostrarTodas (){

        $cates= Categoria::paginate(5);
        
    	return view ('categorias.mostrarTodas', compact('cates'));
    }

    public function eliminar_categoria($id)
    {
        $cate= Categoria::FindOrFail($id);
        $cate->delete();
        return back()->with('mensaje', 'Categoria eliminada correctamente');    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
}
