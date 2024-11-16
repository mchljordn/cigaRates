<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
$routes->get('about', 'Home::about');

$routes->get('review', 'Review::index');
$routes->get('review/create', 'Review::create');
$routes->post('review/create', 'Review::create');
$routes->get('review/(:num)', 'Review::show/$1');

$routes->get('signup', 'Auth::index');
$routes->get('signin', 'Auth::register');

$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'authGuard']);