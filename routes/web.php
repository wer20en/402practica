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
    return view('welcome');
});
Route::get('login', function () {
    return view('login.login');	
});
Route::get('categoriasA', function () {
    return view('anonimo.categoriasA');	
});
Route::get('anonimo', function () {
    return view('anonimo.anonimo');	
});
Route::get('layout', function () {
    return view('layout.layout');
});
Route::get('supervisor', function () {
    return view('supervisor.supervisor');	
});   
Route::get('buscador', function () {
    return view('supervisor.productoS');		
}); 
Route::get('usuario', function () {
    return view('usuario');	
}); 

//Route::get('usuariosS', function () {
  //  return view('supervisor.usuariosS');	
//});  

//CRUD USUARIOS
Route::patch('edit/{id}','UserController@edit')->name('edit');
Route::get('editar/{id}','UserController@editar')->name('editar');
Route::patch('editU/{id}','UserController@editOn')->name('editU');
Route::get('editarU/{id}','UserController@editarOn')->name('editarU');
Route::get('mostrar/{id}','UserController@mostrar')->name('mostrar');
Route::delete('delete/{id}','UserController@delete')->name('delete');
Route::get('usuariosS','UserController@list');
Route::get('usuario','UserController@listU');
Route::get('crear','UserController@crear');
Route::post('save','UserController@save')->name('save');
//crud categorias
Route::patch('editC/{id}','CategoriasController@edit')->name('editC');
Route::get('editarC/{id}','CategoriasController@editar')->name('editarC');
Route::delete('deleteC/{id}','CategoriasController@delete')->name('deleteC');
Route::get('categorias','CategoriasController@list');
Route::get('crearC','CategoriasController@crear');
Route::post('saveC','CategoriasController@save')->name('saveC');
//crud producto 
Route::patch('editP/{id}','ProductosController@edit')->name('editP');
Route::get('editarP/{id}','ProductosController@editar')->name('editarP');
Route::delete('deleteP/{id}','ProductosController@delete')->name('deleteP');
Route::get('productoS','ProductosController@list');
Route::get('buscar','ProductosController@buscador')->name('buscar');
Route::get('crearP','ProductosController@crear');
Route::post('saveP','ProductosController@save')->name('saveP');


//
Route::get('listar_por_categoria/{categoria_id}','BuscarControler@listar_por');

Route::get('categorias/crear','CategoriasControler@create');
Route::get('categorias/{categoria}','CategoriasControler@show');
Route::put('categorias/{categoria}','CategoriasControler@update');
Route::delete('categorias/{categoria}','CategoriasControler@destroy');
Route::get('categorias/{categoria}/edit','CategoriasControler@edit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
