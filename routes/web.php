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
    return view('inicio');
});

Route::get("/inicio", function(){
    return view("inicio");
});

Route::get("/faq", function(){
    return view("faq");
});

// Route::get("/registracion", "RegistracionController@index");
// Route::post("/registracion", "RegistracionController@store");

 Route::get("/login", "LoginController@index");

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
//Esta ruta es para borrar comentario
Route::post('/home', 'PostController@destroy');

//Esta ruta es para hacer un comentario
Route::post('/home', 'commentController@create');


/* Route::get("/home", function(){
    return view("home");
}); */

Route::get("/perfil", function(){
    return view("perfil");
});
//Ruta para el borrado de el perfil
Route::post("/perfil",'userController@destroy');

Route::post('/user', 'userController@edit');
Route::post('/user', 'userController@destroy');


Route::POST("/userPrueba", 'userController@agregarFoto');

Route::post('/createpost',[
  'uses' => 'PostController@CreatePost',
  'as' => 'post.create'
]);
