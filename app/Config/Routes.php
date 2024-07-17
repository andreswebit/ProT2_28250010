<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('productos', 'Home::productos');

/*rutas del Registro de Usuarios*/

$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/*rutas del login*/

$routes->get('/login', 'Login_controller');
$routes->post('/enviarlogin', 'Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');

// * Additional Routing
// *
// *
// * There will often be times that you need additional routing and you * need it to be able to override any defaults in this file. Environment * based routes is one such time. require() additional route files here * to make that happen.
// *
// * You will have access to the $routes object within that file without * needing to reload it.
// if (is_tile (APPPATH
// require APPPATH
// 'Config/
// ENVIRONMENT
// /Routes.php'))
// 'Config/' ENVIRONMENT /Rout php
