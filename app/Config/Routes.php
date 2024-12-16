<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/new_post', 'Home::new_post_form');

$routes->get('/posts', 'Home::all_posts');
$routes->get('/post/(:num)', 'Home::post/$1');
