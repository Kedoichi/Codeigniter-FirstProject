<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'User\HomeController::index');
$routes->group('admin', function ($routes) {
    $routes->get('/', 'Admin\HomeController::index');
    $routes->get('login', 'Admin\LoginController::index');
    $routes->group('employee', function ($routes) {
        $routes->get('/', 'Admin\EmployeeController::index');
        $routes->get('add', 'Admin\EmployeeController::addEmployee');
        $routes->get('confirmDelete', 'Admin\EmployeeController::addEmployee');
        $routes->post('insert', 'Admin\EmployeeController::insertEmployee');
        $routes->post('delete', 'Admin\EmployeeController::deleteEmployee');
    });
    $routes->get('document', 'Admin\DocumentController::index');
    $routes->get('signout', 'Admin\SignOutController::index');

});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}