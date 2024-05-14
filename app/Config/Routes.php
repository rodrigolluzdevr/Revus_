<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //Busca
$routes->get('/busca', 'Busca::index');
$routes->post('busca/buscaProdutosPorDepartamento', 'Busca::buscaProdutosPorDepartamento');

 //Categories
 $routes->get('/categories', 'Categories::index');

 //Manufacturers
 $routes->get('/manufacturers', 'Manufacturers::index');

 //VehiclesModel
 $routes->get('/vehicles_model', 'VehiclesModel::index');



