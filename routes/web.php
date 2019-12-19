<?php


Route::get('/', function () {
    return view('inicio');
});

Route::get("/inicio", function(){
    return view("inicio");
});

Route::get("/faq", function(){
    return view("faq");
});

//Ruta para el borrado de el perfil
Route::post("/perfil",'userController@destroy');


//ruta para la funcion de busqueda de usuario
Route::post("/search",'SearchController@search')->name('search');

//ruta para seguir a un usuario
Route::get('/follow/{id}','FollowerController@following')->name('follow');

//ruta para dejar de seguir a un usuario
Route::get('/unfollow/{id}','FollowerController@UnFollow')->name('unFollow');

//ruta para dejar de seguir a un usuario
Route::get('/perfil_usuario/{id}','userController@mostrarUsuario')->name('perfil_usuario');


 Route::get("/login", "LoginController@index");

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');

Route::get('/perfil', 'PostController@indexPerfil');

//Esta ruta es para borrar comentario
Route::post('/borrarpost', 'PostController@destroy');

//Esta ruta es para hacer un comentario
Route::post('/home', 'commentController@create');
//Esta ruta es para hacer un comentario desde el search
Route::post('/comentar', 'commentController@create');

//ruta para enviar editar datos de perfil
Route::post('/editUserData', 'userController@edit');

Route::post('/user', 'userController@destroy');

//ruta para cambiar foto de perfil o bio
Route::post("/usuarioFotoBio", 'userController@agregarFotoyBio');

//ruta para cambiar foto de portada
Route::post("/CambiarFotoPortada", 'userController@agregarFotoPortada');

Route::post('/createpost',[
  'uses' => 'PostController@CreatePost',
  'as' => 'post.create'
]);
