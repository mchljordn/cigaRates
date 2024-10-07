<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');

$routes->get('review', 'Review::index');
$routes->get('review/create', 'Review::create');
$routes->post('review/create', 'Review::create');
$routes->get('review/(:num)', 'Review::show/$1');