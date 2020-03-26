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
    return view('presentacion');
});
Route::get('/inicio',function () {
    return view('inicio');
});
Route::get('/faq',function () {
    return view('faq');
});
Route::resource('products', 'productsController');
Auth::routes();

Route::get('/perfil', 'HomeController@index')->name('perfil');


