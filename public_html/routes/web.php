<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});

//USERS
$router->get('calc', 'UserController@calc');

$router->post('add', 'UserController@add');

$router->get('read', 'UserController@read');

$router->post('update', 'UserController@update');

//PRODUCTS
$router->get('product/list', 'ProductController@list');

$router->post('product/add', 'ProductController@add');