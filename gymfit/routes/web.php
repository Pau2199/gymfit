<?php

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

<<<<<<< HEAD
Route::get('/', function () {

    return view('vistaCarrito');

});

Route::get('product/store', 'ProductController@store');

Route::get('/agregarProducto', 'ProductosController@store');
=======
Route::get('/', function(){
    return view('index');
});
Route::get('/agregarProducto', 'ProductosController@prueba');
Route::get('/MostrarProducto/{id}', 'ProductosController@show');
>>>>>>> master


