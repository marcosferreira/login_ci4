<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'],'/login', 'Login::index');
$routes->match(['get', 'post'],'/register', 'Register::index');
$routes->get('/logout', 'Logout::index');


$routes->group('admin', ['filter' => 'auth:admin,user'], static function($routes){
    $routes->get('/', 'Admin\Home::index');
    $routes->group('users', ['filter' => 'auth:admin'], static function($routes) {
        $routes->get('', 'Admin\Users::index');
        $routes->get('(:any)', 'Admin\Users::$1');
    });
});