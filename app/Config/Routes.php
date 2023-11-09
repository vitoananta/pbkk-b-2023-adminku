<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Admin\DashboardController::index');
$routes->get('/dashboard', 'Admin\DashboardController::index');
$routes->get('/components/buttons', 'Admin\ComponentsController::buttons');
$routes->get('/components/cards', 'Admin\ComponentsController::cards');
$routes->get('/utilities/colors', 'Admin\UtilitiesController::colors');
$routes->get('/utilities/borders', 'Admin\UtilitiesController::borders');
$routes->get('/utilities/animations', 'Admin\UtilitiesController::animations');
$routes->get('/utilities/other', 'Admin\UtilitiesController::other');
$routes->get('/pages/login', 'Admin\PagesController::login');
$routes->get('/pages/register', 'Admin\PagesController::register');
$routes->get('/pages/forgot', 'Admin\PagesController::forgot');
$routes->get('/pages/page404', 'Admin\PagesController::page404');
$routes->get('/pages/blank', 'Admin\PagesController::blank');
$routes->get('/charts', 'Admin\ChartsController::index');
$routes->get('/tables', 'Admin\TablesController::index');
