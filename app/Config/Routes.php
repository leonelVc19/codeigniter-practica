<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Las rutas
$routes->get('/', 'Home::index');
$routes->get('/my_web', 'MyWeb::my_web');
$routes->get('/products', 'Products::index');
$routes->get('/product/(:num)', 'Products::show_by_id/$1');
//un tipo de filtrado de dos caracteres numericos
// $routes->get('/product/([0-9]{2})', 'Products::show_by_id/$1');
$routes->get('/product/(:alpha)/(:num)', 'Products::show_alpha/$1/$2');

$routes->view('productList/([0-9]{2})/(:alpha)', 'products_list');

//Para poder separar por roles
$routes->group('admin', static function($routes) {
    $routes->get('/my_web', 'Admin\MyWeb::my_web');
});