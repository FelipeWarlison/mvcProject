<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'UsuariosController@signin');
$router->post('/login', 'UsuariosController@signinAction');

$router->get('/cadastro', 'UsuariosController@signup');
$router->post('/cadastro', 'UsuariosController@signupAction');

