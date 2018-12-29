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
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    // SaleItems
  $router->get('saleitems',  ['uses' => 'SaleItemController@list']);
  $router->get('saleitems/{id}', ['uses' => 'SaleItemController@show']);
  $router->post('saleitems', ['uses' => 'SaleItemController@create']);
  $router->delete('saleitems/{id}', ['uses' => 'SaleItemController@delete']);
  $router->put('saleitems/{id}', ['uses' => 'SaleItemController@update']);
});
