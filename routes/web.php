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

//===========================================================
// Routes personnages
//===========================================================


// création d'une route/endpoint pour récupérer la liste des personnages
$router->get(
    '/characters', // endpoint
    [
        'uses' => 'CharactersController@list',
        'as'   => 'characters-list'
    ]
);

// création d'une route/endpoint pour récupérer un personnage
$router->get(
    '/characters/{id}', // endpoint
    [
        'uses' => 'CharactersController@item',
        'as'   => 'characters-item'
    ]
);

//===========================================================
// Routes maisons
//===========================================================

// création d'une route/endpoint pour récupérer la liste des maisons
$router->get(
    '/houses', // endpoint
    [
        'uses' => 'HousesController@list',
        'as'   => 'houses-list'
    ]
);

