<?php

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

use livre\Router;

$router = new Router($_SERVER["REQUEST_URI"]);

$router->get('/', "HomeController@index");
$router->get('/createBook', "CreateBookController@index");

$router->get('/auth/login/', "UserController@showLogin");
$router->get('/auth/register/', "UserController@showRegister");
$router->get('/auth/logout/', "UserController@logout");

$router->post('/auth/login/', "UserController@login");
$router->post('/auth/register/', "UserController@register");

$router->post('/book/:book_id', "BookController@index");
$router->post('/createBook', "CreateBookController@store");
$router->get('/delbook/:book_id', "BookController@del");

$router->run();
