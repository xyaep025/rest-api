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
    return view('index');
});


$router->post('/regiester/users', 'AuthController@Register');
$router->post('/login/users', 'AuthController@Login');

$router->get('todo', [
  'middleware' => 'api',
  'uses' => 'TodoController@index'
]);

$router->get('/profile', [
  'middleware' => 'api',
  'uses' => 'UserController@me'
]);

$router->get('/profile/{nama}', [
  'middleware' => 'api',
  'uses' => 'UserController@search'
]);

$router->get('/todo', [
  'middleware' => 'api',
  'uses' => 'TodoController@index'
]);

$router->post('/todo', [
  'middleware' => 'api',
  'uses' => 'TodoController@store'
]);

$router->post('/out', [
  'middleware' => 'api',
  'uses' => 'AuthController@Logout'
]);

$router->post('/produk/create', [
  'middleware' => 'api',
  'uses' => 'ProductController@store'
]);
