<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/about', 'page::about');
$routes->get('/contact', 'page::contact');
$routes->get('/faqs', 'page::faqs');
$routes->setAutoRoute(true);
$routes->get('/biodata', 'page::biodata');