<?php

/*
|--------------------------------------------------------------------------
| routerlication Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an routerlication.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    // return $router->router->version();
    return "Hola mundo desde lumen";
});

// Muestra todas las peliculas
$router->get('peliculas', 'PeliculasController@index');

// Muestra solo una pelicula especifica
$router->get('peliculas/{id}', 'PeliculasController@show');

// Crear un nuevo registro en la tabla
$router->post('peliculas', 'PeliculasController@create');

// Actualiza un registro especifico
$router->put('peliculas/{id}', 'PeliculasController@update');

// Elimina un registro especifico
$router->delete('peliculas/{id}', 'PeliculasController@destroy');


/**
 * Routes for resource usuarios
 */
$router->get('usuarios', 'UsuariosController@all');
$router->get('usuarios/{id}', 'UsuariosController@get');
$router->post('usuarios', 'UsuariosController@add');
$router->put('usuarios/{id}', 'UsuariosController@put');
$router->delete('usuarios/{id}', 'UsuariosController@remove');
