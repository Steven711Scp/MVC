<?php

require_once '../libreria/Route.php';


use Libreria\Route;

Rouete::get('/', function(){
    echo "Hola desde la pagina principal";

});

Route::get('/contact', function(){
    echo "Hola desde la pagina de contacto";

});

Route::get('/about', function(){
    echo "Hola desde la pagina acerca de ";

});
