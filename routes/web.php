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
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/panel', function () {
    return view('panel');
});

Route::post('/contact', 'ContactController@contactSaveData');

Route::post('/suscribe', 'SuscribeController@SuscribeSaveData');

Route::get('/lista_de_precios', 'PricesController@download');


Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::post('/admin', 'PricesController@Upload');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
