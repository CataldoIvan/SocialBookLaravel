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
/* 
Route::get("/home", function(){
    return view("home");
}); */

Route::get("/faq", function(){
    return view("faq");
});

Route::get("/registracion", "RegistracionController@index");
Route::post("/registracion", "RegistracionController@store");

/* Route::get("/login", "LoginController@index"); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
