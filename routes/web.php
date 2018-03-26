<?php

Dusterio\LumenPassport\LumenPassport::routes($router);

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1', 'namespace' => 'Api\V1', 'middleware' => ['auth']], function () use ($router) {
    $router->get('restaurants', 'RestaurantsController@index');
    $router->get('restaurants/{id}', 'RestaurantsController@show');
    $router->post('restaurants', 'RestaurantsController@store');
    $router->put('restaurants/{id}', 'RestaurantsController@update');
    $router->delete('restaurants/{id}', 'RestaurantsController@destroy');
});
