<?php 

use Libreria\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function(){
    return "Hola desde la pagina de contacto";

});

Route::get('/about', function(){
    return "Hola desde la pagina acerca de ";

});

Route::get('/courses/prueba',function(){
    return "Hola desde la pagina de cursos prueba";
});

Route::get('/courses/:slug', function($slug){
    return "El curso es: ".$slug;

});

// /courses/php

Route::dispatch();