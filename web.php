<?php 


use Libreria\Route;

Route::get('/', function(){
    echo "Hola desde la pagina principal";

});

Route::get('/contact', function(){
    echo "Hola desde la pagina de contacto";

});

Route::get('/about', function(){
    echo "Hola desde la pagina acerca de ";

});

Route::get('/courses/:slug', function(){
    echo "Hola desde la pagina de cursos";

});

Route::dispath();