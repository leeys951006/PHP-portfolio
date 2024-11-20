<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Navbar 라우터
$routes->get('/', 'Home::index');
$routes->get('Resume', 'Resume::index');
$routes->get('Project', 'Project::index');
// $routes->post('project/getCards', 'Project::getCards');
$routes->get('Project/PHP', 'Project::PHP');
$routes->get('Project/Next', 'Project::Next');
$routes->get('Project/Drug', 'Project::Drug');
$routes->get('Project/ERP', 'Project::ERP');
$routes->get('Project/PlanT', 'Project::PlanT');
$routes->get('Project/Poketmon', 'Project::Poketmon');
$routes->get('Project/Stress', 'Project::Stress');

// 회원 가입 
// $routes->get('register', 'Members::register');
// $routes->post('register', 'Members::processRegister');