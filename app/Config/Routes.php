<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', 'Home::index');
$routes->add('manual-input', 'Home::manual_input');
$routes->add('upload-csv', 'Home::upload_csv');
$routes->add('predict-csv', 'Home::predict_csv');
