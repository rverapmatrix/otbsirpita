<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->add('/validar', 'Home::validar');

$routes->get('/principal', 'Home::principal');