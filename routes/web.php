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

$router->group(['prefix' => 'constants'], function() use ($router) {
    $router->get('categories', function () {
        return json_encode(['data' => app('db')->select("SELECT * FROM categories")]);
    });

    $router->get('rates', function () {
        return json_encode(['data' => app('db')->select("SELECT * FROM rates")]);
    });
});

$router->group(['prefix' => 'listings'], function() use ($router) {
    $router->post('', function () {
        return json_encode(['data' => app('db')->select("SELECT * FROM categories")]);
    });
});