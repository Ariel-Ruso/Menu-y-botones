<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('bienvenidos');
})->name ('bienvenidos');

Route::get('QuienesSomos', function() {
	return view('QuienesSomos');
}
)->name ('nosotros');

//abm categorias

Route::get ('categorias/crear_categoria', 'categoriaController@crear_categoria')->name('crear_categoria');

Route::post ('categorias/crear_categoria2', 'categoriaController@crear_categoria2')->name('crear_categoria2');

Route::get ('categorias/mostrarTodas', 'categoriaController@mostrarTodas')->name('mostrarTodas');

Route::delete('categorias/{id}', 'categoriaController@eliminar_categoria')->name('eliminar_categoria');

//abm articulos
Route::delete('articulos/{id}', 'articuloController@eliminar_articulo')->name('eliminar_articulo');

Route::get ('articulos/crear_articulo', 'articuloController@crear_articulo')->name('crear_articulo');

Route::get ('articulos/mostrarTodos', 'articuloController@mostrarTodos')->name('mostrarTodosArt');

Route::post ('articulos/crear_articulo2', 'articuloController@crear_articulo2')->name('crear_articulo2');

Route::get ('articulos/detalle_articulo/{id}', 'articuloController@detalle_articulo')->name('detalle_articulo');

Route::get ('articulos/editar_articulo/{id}', 'articuloController@editar_articulo')->name('editar_articulo');

Route::put ('articulos/editar/{id}', 'articuloController@actualizar_articulo')->name('actualizar_articulo');

Route::get ('articulos/buscaPorAr', 'articuloController@buscaPorAr')->name('buscaPorAr');


//abm user

Route::post ('usuarios/crear', 'usuarioController@crear_usuario2')->name('crear_usuario2');

Route::get ('roles', 'RolController@mostrar')->name('roles');

Route::get ('usuarios/crear_usuario', 'usuarioController@crear_usuario')->name('crear_usuario');

Route::get ('usuarios/mostrarTodos', 'usuarioController@mostrarTodos')->name('mostrarTodos');

Route::get ('usuarios/buscaPor', 'usuarioController@buscaPor')->name('buscaPor');

Route::get ('usuarios/detalle_usuario/{id}', 'usuarioController@detalle_usuario')->name('detalle_usuario');

Route::delete('{id}', 'usuarioController@eliminar_usuario')->name('eliminar_usuario');

Route::get ('usuarios/editar_usuario/{id}', 'usuarioController@editar_usuario')->name('editar_usuario');

Route::put ('usuarios/editar/{id}', 'usuarioController@actualizar_usuario')->name('actualizar_usuario');


Route::get ('roles', 'RolController@mostrar')->name('roles');

