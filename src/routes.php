<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuarioController@add');
$router->post('/novo', 'UsuarioController@addAction');
$router->get('/usuario/{id}/editar', 'UsuarioController@edit');
$router->post('/usuario/editar', 'UsuarioController@editAction');
$router->get('/usuario/{id}/deletar', 'UsuarioController@delete');
