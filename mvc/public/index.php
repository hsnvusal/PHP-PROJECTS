<?php 
require  __DIR__ . "/../vendor/autoload.php";

use App\Core\Route;

Route::add('/','Front\HomeController@index');

Route::add('example','Front\ExampleController@index');





$uri = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
if ($uri === '') {
    $uri = '/';
}

Route::dispatch($uri);