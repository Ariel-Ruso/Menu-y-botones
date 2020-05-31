<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('bienvenidos');
})->name ('bienvenidos');

Route::get ('/matem', 'pagecontroller@matem')->name('matem');

Route::post ('/', 'pagecontroller@nuevouser')->name('usuario_nuevo');

Route::get ('admin/usuarios/mostrar', 'pagecontroller@mostrar')->name('mostrar_usuarios');

Route::get ('/admin/usuarios/detalle/{id}', 'pagecontroller@detalle')->name('detalle_usuario');

Route::get ('admin/usuarios/editar/{id}', 'pagecontroller@editar')->name('usuarios_editar');

Route::put ('admin/usuarios/editar/{id}', 'pagecontroller@actualizar')->name('actualizar_usuario');

Route::delete('/{id}', 'pagecontroller@eliminar')->name('usuarios_eliminar');

Route::get('admin/nosotros', function (){

	$equipo= ['Ariel','Jose', 'Pablo', 'Cris'];
	return view ('admin/nosotros', compact('equipo'));

})->name ('nosotros');


