<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages', 'Pages::index');
$routes->get('pages/(:any)', 'Pages::showme/$1');
$route['map-location'] = 'MapController/openMapLocation';

