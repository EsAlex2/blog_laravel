<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;

//Ruta basica para mostrar una vista
Route::get('/', [homeController::class, 'index']);

//ruta para mostrar un mensaje desde el controlador llamando a sus metodos
Route::get('/posts', [postController::class, 'index']);
Route::get('/create', [postController::class,'create']); 
Route::get('/posts/{post}', [postController::class,'show']); 


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