<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//
$routes->get('/', 'Home::index');
$routes->get('/contacts', 'Contacts::index');
$routes->get('/aboutus', 'AboutUs::index');
$routes->get('/policy-research', 'PolicyResearch::index');
$routes->get('/advisory-services', 'AdvisoryServices::index');
$routes->get('/trainings', 'Trainings::trainingAll');
$routes->get('/trainingss', 'Trainings::index');
$routes->get('/preschedule', 'Preschedules::prescheduleAll');
$routes->get('/message', 'Massages::index');
$routes->get('/skills-and-enterprise-development', 'SkillsEnterprise::index');
$routes->get('/read-message', 'Massages::getMessages',['filter' =>'auth']);
$routes->get('/admins', 'Admins::index',['filter' =>'auth']);
$routes->get('/clients', 'Clients::index',['filter' =>'auth']);
$routes->get('/teammembers', 'TeamMembers::index',['filter' =>'auth']);
$routes->get('/services', 'Services::index',['filter' =>'auth']);
$routes->get('/trainingss', 'Trainings::index',['filter' =>'auth']);
$routes->get('/preschedules', 'Preschedules::index',['filter' =>'auth']);
$routes->get('/Messages/ReadMessages', 'Messages::ReadMessages',['filter' =>'auth']);
$routes->get('/users', 'Users::index',['filter' =>'auth']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
