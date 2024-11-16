<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Navbar 라우터
$routes->get('/', 'Home::index');
$routes->get('Resume', 'Resume::index');