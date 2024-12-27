<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
$routes->get('/images/(:segment)', 'Home::image/$1');
$routes->post('/admin/hapus', 'AdminController::hapusHijab');
$routes->post('/admin/edit', 'AdminController::editHijab');

service('auth')->routes($routes);


//admin
$routes->group('admin',['filter' => ['group:admin']], function($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('daftar-hijab', 'AdminController::daftarHijab');
    $routes->post('daftar-hijab', 'AdminController::createHijab');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->post('/hijabs/edit', 'HijabController::edit');
    $routes->get('/hijabs/delete/(:num)', 'HijabController::delete/$1');
    $routes->get('admin/daftar-hijab', 'AdminController::daftarHijab');
    $routes->post('admin/daftar-hijab/edit', 'AdminController::editHijab');
    $routes->get('admin/daftar-hijab/delete/(:num)', 'AdminController::deleteHijab/$1');
    $routes->post('/admin/hapus', 'AdminController::hapusHijab');
    $routes->post('/admin/edit', 'AdminController::editHijab');
});