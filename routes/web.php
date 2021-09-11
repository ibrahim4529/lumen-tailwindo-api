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
$router->get('/', function ()
{
    return 'Selamat Datang Di Api taiwindo gunakan endpoint https://tailwind2bs.herokuapp.com/api/convert';
});
$router->post('api/convert', 'TailwindoController@index');

