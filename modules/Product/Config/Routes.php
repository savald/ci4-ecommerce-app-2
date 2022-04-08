<?php
$routes->group('product', ['namespace' => 'Product\Controllers'], function ($routes) {
  $routes->get('/', 'Product::index');
  $routes->get('view-product', 'Product::viewProduct');
  $routes->get('view-cart', 'Product::viewCart');
  $routes->get('categories', 'Product::categories');
});

// $routes = \Config\Services::routes();
// $routes->get('product', 'Product\Controllers\Product::index');
