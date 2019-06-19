<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    // return $router->app->version();
    return "Hola mundo desde lumen";
});

// Muestra todas las peliculas
$router->get('peliculas', 'PeliculasController@index');

// Muestra solo una pelicula especifica
$router->get('peliculas/{id}', 'PeliculasController@show');

// Crear un nuevo registro en la tabla
$router->post('peliculas', 'PeliculasController@create');
