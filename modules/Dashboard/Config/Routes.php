<?php
$routes->group('dashboard', ['namespace' => 'Dashboard\Controllers'], function ($routes) {
  $routes->get('home', 'Dashboard::index');
  $routes->get('products', 'Dashboard::products');
  $routes->get('add-product', 'Dashboard::addProduct');
  $routes->get('profile', 'Dashboard::profile');
  $routes->get('become-seller', 'Dashboard::becomeSeller');
});
