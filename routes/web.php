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

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SuscribeController;


Route::get('/', function () {
    return view('welcome');
});



Route::post('/contact', 'ContactController@contactSaveData');

Route::post('/suscribe', 'SuscribeController@SuscribeSaveData');

Route::get('/lista_de_precios', 'PricesController@download');

Route::get('/admin', function(){

    return view('admin/admin');

})->middleware('admin');

Route::get('/usuarionuevo', function(){

    return view('admin/usuarionuevo');

})->middleware('admin');

Route::post('/usuarionuevo', 'AdminController@altaUsuario')->middleware('admin');


Route::post('/admin', 'PricesController@Upload')->middleware('admin');

Route::get('/dd', function(){
    return dd(Auth::user());
});

Auth::routes();