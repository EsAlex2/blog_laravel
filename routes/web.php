<?php

use Illuminate\Support\Facades\Route;


//Ruta basica para mostrar una vista 'return view()'
Route::get('/', function () {
    return view('welcome');
});

//Ruta basica para mostrar un texto
Route::get('/saludo', function () {
    return 'HOLA MUNDO!';
});

Route::get('/usuario/create', function () {
    return "Usuario creado exitosamente";
});


//Ruta con parametros para mostrar datos variables desde la uri
Route::get('/usuario/{id}', function ($id) {
    return "Usuario: {$id}";
});

//Ruta con multiples parametros para mostrar datos variables desde la uri
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Post: {$postId}, Comentario: {$commentId}";
});

//Ruta con multiples parametros y condicionales para mostrar datos variables desde la uri
Route::get('/posts/{post?}/comments/{comment?}', function ($postId, $commentId = null) {
    if ($commentId) {
        return "<h1>Post: {$postId}, Comentario: {$commentId}</h1>";
    }else{
        return "<h1>Post: {$postId}, Comentario desconocido</h1>";
    }
});




?>