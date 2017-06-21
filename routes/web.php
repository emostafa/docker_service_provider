<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/containers', ['uses' => 'DockerController@index']);

Route::get('/test', function(){
    $messageFactory = new Http\Message\MessageFactory\DiactorosMessageFactory();
    dd($messageFactory);
    $docker = new App\Helpers\DockerApi($messageFactory);
    $docker->listContainers();
});
