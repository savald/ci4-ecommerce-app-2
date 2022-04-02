<?php
$routes->group('product', ['namespace' => '\Modules\Product\Controllers'], function ($routes) {
  $routes->get('/', 'Product::index');
});
