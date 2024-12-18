<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

$routes->get('/', 'Home::index');

$routes->get('/review', 'ReviewController::index');
$routes->get('/review/create', 'ReviewController::createForm');
$routes->post('/review/insertReview', 'ReviewController::insertReview');
$routes->get('/review/create/(:num)', 'ReviewController::createForm/$1');
$routes->get('/review/(:num)', 'ReviewController::show/$1');

$routes->post('review/delete/(:num)', 'ReviewController::delete/$1');

$routes->get('/signup', 'SignupController::index');
$routes->post('/signup/store', 'SignupController::store');
$routes->post('/signin/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');

$routes->get('/product/showcase', 'ProductController::showcase');
$routes->get('/product/(:num)', 'ProductController::view/$1');