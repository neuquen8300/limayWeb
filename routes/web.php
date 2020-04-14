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
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dd', function(){
    return dd(Auth::user()->email);
});
Route::post('/contact', 'ContactController@contactSaveData');

Route::post('/suscribe', 'SuscribeController@SuscribeSaveData');

Route::get('/lista_de_precios', 'PricesController@download');

Route::get('/admin', 'AdminController@index')->middleware('admin');

Route::get('/new-promo', 'AdminController@getNewPromo')->middleware('admin');

Route::get('/usuarionuevo', function(){

    return view('admin/usuarionuevo');

})->middleware('admin');

Route::post('/usuarionuevo', 'AdminController@altaUsuario')->middleware('admin');


Route::post('/admin', 'PricesController@Upload')->name('admin')->middleware('admin');

Route::get('/dashboard', 'UserController@index')->name('dashboard')->middleware('auth');

Route::get('/registerVisit', 'UserController@getRegisterVisit')->middleware('auth');

Route::get('/new-client', 'ClientController@getNewClient')->middleware('auth');

Route::get('/account/{id}', 'UserController@getClient')->middleware('auth');

Route::get('/payment/{id}', 'UserController@getPayment')->middleware('auth');

Route::get('/new-order/{id}', 'UserController@getNewOrder')->middleware('auth');

Route::get('/confirmPayment/{id}', 'UserController@getConfirmPayment')->middleware('auth');

Route::get('/promos', 'UserController@getPromos')->middleware('auth');

Auth::routes();