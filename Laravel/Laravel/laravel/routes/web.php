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

/* Route::get('/', function () {
    return view('welcome');
}); */



 Route::get('/', function () {
    return 'hola mundo';
});


 Route::get('/pepeguapo', function () {
    return 'pepe es capo';
});


 Route::get('/pepeguapo/{name}', function ($name) {
    return "{$name} es guapo";
});


 Route::get('/post/{post_id}/comments/{comment_id?}', function ($post_id, $comment_id = null) {
    $comment_id?: "No hay comentarios";
});


 Route::get('resultado/{numero}/{numero2?}', function ($numero, $numero2 = null) {
     if (!is_null($numero2)){
         return $numero * $numero2;
     }else{
        return ($numero%2 == 0)? "Es Par" : "Es Impar";
     }
    });


 Route::get('/actor/{id}', 'ActorController@show')->name('actor.show')->where('id', '[0-9]+');
 Route::get('/actors', 'ActorController@directory')->name('actors.index');

 Route::get('/actor/search', 'ActorController@search')->name('actor.search');




