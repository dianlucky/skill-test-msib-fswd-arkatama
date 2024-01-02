<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BiodataController::index');
$routes->post('biodata/save', 'BiodataController::save');
