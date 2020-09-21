<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('bienvenidos');
})->name ('bienvenidos');

//abm users

Route::post ('usuarios/crear', 'usuarioController@crear_usuario2')->name('crear_usuario2');

Route::get ('usuarios/crear_usuario', 'usuarioController@crear_usuario')->name('crear_usuario');

Route::get ('usuarios/mostrarTodos', 'usuarioController@mostrarTodos')->name('mostrarTodos');

Route::get ('usuarios/detalle_usuario/{id}', 'usuarioController@detalle_usuario')->name('detalle_usuario');

Route::delete('{id}', 'usuarioController@eliminar_usuario')->name('eliminar_usuario');

Route::get ('usuarios/editar_usuario/{id}', 'usuarioController@editar_usuario')->name('editar_usuario');

Route::put ('usuarios/editar/{id}', 'usuarioController@actualizar_usuario')->name('actualizar_usuario');



Route::get('admin/nosotros', function (){
	$equipo= ['Claudio', 'Ariel'];
	return view ('admin/nosotros', compact('equipo'));
})->name ('nosotros');


