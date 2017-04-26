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

Route::get('/', function () {
    return view('welcome');
});
Route::get('contro', 'PruebaController@index');

Route::resource('movie','MovieController');


Route::get('pu', function (){

    return 'Holas desde Routes';
});
Route::get('nom/{nom}',function($nom){
return 'Su nombre es'.$nom;
});
Route::get('viw','PruController@index');
Route::get('viww','PruController@contac');
Route::get('viwww','PruController@reviews');

Route::resource('usuario','UserController');