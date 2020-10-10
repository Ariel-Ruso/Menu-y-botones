<?php

use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('bienvenidos');
})->name ('bienvenidos');

Route::get('QuienesSomos', function() {
	return view('QuienesSomos');
}
)->name ('nosotros');

//storage link

//Route::get ('/', 'ImagenController@storage_link')->name('storage');

//abm categorias

Route::get ('categorias/crear_categoria', 'CategoriaController@crear_categoria')->name('crear_categoria');

Route::post ('categorias/crear_categoria2', 'CategoriaController@crear_categoria2')->name('crear_categoria2');

Route::get ('categorias/mostrarTodas', 'CategoriaController@mostrarTodas')->name('mostrarTodas');

Route::delete('categorias/{id}', 'CategoriaController@eliminar_categoria')->name('eliminar_categoria');

//abm articulos

Route::get ('articulos/mostrarxCate', 'ArticuloController@mostrarxCate')->name('mostrarxCate');

Route::delete('articulos/{id}', 'ArticuloController@eliminar_articulo')->name('eliminar_articulo');

Route::get ('articulos/crear_articulo', 'ArticuloController@crear_articulo')->name('crear_articulo');

Route::get ('articulos/mostrarTodos', 'ArticuloController@mostrarTodos')->name('mostrarTodosArt');

Route::post ('articulos/crear_articulo2', 'ArticuloController@crear_articulo2')->name('crear_articulo2');

Route::get ('articulos/detalle_articulo/{id}', 'ArticuloController@detalle_articulo')->name('detalle_articulo');

Route::get ('articulos/editar_articulo/{id}', 'ArticuloController@editar_articulo')->name('editar_articulo');

Route::put ('articulos/editar/{id}', 'ArticuloController@actualizar_articulo')->name('actualizar_articulo');

Route::get ('articulos/buscaPorAr', 'ArticuloController@buscaPorAr')->name('buscaPorAr');


//abm user

Route::post ('Usuarios/crear', 'UsuarioController@crear_usuario2')->name('crear_usuario2');

Route::get ('roles', 'RolController@mostrar')->name('roles');

Route::get ('Usuarios/crear_usuario', 'UsuarioController@crear_usuario')->name('crear_usuario');

Route::get ('Usuarios/mostrarTodos', 'UsuarioController@mostrarTodos')->name('mostrarTodos');

Route::get ('Usuarios/buscaPor', 'UsuarioController@buscaPor')->name('buscaPor');

Route::get ('Usuarios/detalle_usuario/{id}', 'UsuarioController@detalle_usuario')->name('detalle_usuario');

Route::delete('{id}', 'UsuarioController@eliminar_usuario')->name('eliminar_usuario');

Route::get ('Usuarios/editar_usuario/{id}', 'UsuarioController@editar_usuario')->name('editar_usuario');

Route::put ('Usuarios/editar/{id}', 'UsuarioController@actualizar_usuario')->name('actualizar_usuario');


Route::get ('roles', 'RolController@mostrar')->name('roles');

