<?php
$routes->group('user', ['namespace' => 'User\Controllers'], function ($routes) {
  // $routes->get('/', 'Product::index');
  $routes->post('create-account', 'Auth::createAccount');
  $routes->post('login', 'Auth::login');
});

// $routes = \Config\Services::routes();
// $routes->get('product', 'Product\Controllers\Product::index');
