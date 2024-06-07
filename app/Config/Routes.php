<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /*RUTAS DE USUARIO*/
$routes->get('/', 'Home::index');

$routes->add('/validar', 'Home::validar');

$routes->get('/principal', 'Home::principal');

$routes->get('/listausuarios', 'Usuario::mostrarRegistros');

$routes->add('/agregarSocio', 'Usuario::agregarSocio');

$routes->add('/insertSocio', 'Usuario::insertSocio');

//$routes->add('/agregarSocio', 'Usuario::agregarSocio');

//$routes->get('/agregars', 'Usuario::insertSocio');
