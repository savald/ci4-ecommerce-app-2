<?php
$routes->group('user', ['namespace' => 'User\Controllers'], function ($routes) {
  $routes->post('create-account', 'User::create-account');
  $routes->post('login', 'User::login');
});
