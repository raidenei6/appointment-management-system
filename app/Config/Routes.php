<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/register', 'RegisterController::register');
$routes->get('/form', 'BackToForm::btk');
$routes->post('/login', 'LoginController::login');
$routes->get('/logout', 'LogoutController::logout');
$routes->get('appointments/make', 'Appointments::make');
$routes->post('/make-appointment', 'AppointmentController::book');
$routes->get('/login', 'BackToLogin::btl');
$routes->get('appointments/viewSchedules', 'Appointments::viewSchedules');
// $routes->get('schedule-table', 'AppointmentController::viewSchedules');

// $routes->get('viewSchedules', 'AppointmentController::viewSchedules');

// $routes->post('/make-appointment', 'AppointmentController::book');
// $routes->get('/success', 'AppointmentController::success');


// $routes->get('schedules/view', 'Schedules::view');







