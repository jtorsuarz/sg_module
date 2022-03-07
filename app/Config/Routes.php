<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->post('loggers', 'Login::loggers', ['as' => 'Signin']);
$routes->get('Login', 'Login::index', ['as' => 'Login']);
$routes->get('Logout', 'Login::logout', ['as' => 'Logout']);


$routes->group('/', ['filter' => 'authGuard'], ['namespace' => 'App\Controllers'], function ($routes) {

	$routes->get('', 'Login::admin', ['as' => 'viewDashboardAdmin']);
});

// EMPLEADOS
$routes->group('Empleado', ['filter' => 'authGuard'], ['namespace' => 'App\Controllers'], function ($routes) {

	$routes->get('nuevoEmpleadoView', 'Empleado::agregarEmpleadosView', ['as' => 'viewEmpleado']);
	$routes->post('insert_Empleado', 'Empleado::insert_Empleado', ['as' => 'insert_Empleado']);
	$routes->post('delete_EmpleadoDB', 'Empleado::delete_Empleado', ['as' => 'delete_EmpleadoDB']);
	$routes->post('modificarEmpleadoDB', 'Empleado::modificarEmpleadoDB', ['as' => 'modificarEmpleadoDB']);
	$routes->get('modificarEmpleado/(:any)', 'Empleado::modificarEmpleado/$1', ['as' => 'modificarEmpleado']);

	$routes->get('mostrarDatosEmpleadoView', 'Empleado::mostrarDatosEmpleadosView', ['as' => 'viewMostrarEmpleado']);

	// GET JSON
	$routes->get('getAdminsJSON', 'Empleado::getListAdministradores', ['as' => 'getAdminsJSON']);
	$routes->get('listEmpleados', 'Empleado::getListEmpleados', ['as' => 'listarEmpleados']);

	// USUARIOs
	$routes->get('CambiarPassUsuarioView', 'Empleado::CambiarPassUsuario', ['as' => 'CambiarPassUsuarioView']);

	// -- CALENDARIO --
	$routes->get('CalendarioView', 'Empleado::calendarioTrabajoView', ['as' => 'viewMostrarCalendario']);
	// -- NÓMINA -- 
	$routes->get('pdfNominaView', 'Empleado::pdfNomina', ['as' => 'pdfNominaView']);
});

//DEPARTAMENTO

	$routes->group('Departamento', ['filter' => 'authGuard'], ['namespace' => 'App\Controllers'], function ($routes) {
	$routes->get('index', 'Departamento::index', ['as' => 'DepartamentoView']);
	$routes->get('nuevoDepartamento', 'Departamento::nuevoDepartamentoView', ['as' => 'nuevoDepartamentoView']);
	$routes->get('modificaDepartamento/(:any)', 'Departamento::modificaDepartamento/$1', ['as' => 'modificaDepartamento']);
	$routes->get('listaDepartamento', 'Departamento::getListDepartamento', ['as' => 'listaDepartamentoView']);

	$routes->post('insert_Departamento', 'Departamento::insert_Departamento', ['as' => 'insert_Departamento']);
	$routes->post('modificarDepartamentoDB', 'Departamento::modificarDepartamentoDB', ['as' => 'modificarDepartamentoDB']);
	// json 
	$routes->get('getDepartJSON', 'Departamento::getListDepartamento_select', ['as' => 'getDepartJSON']);

	$routes->post('delete_DepartamentoDB', 'Departamento::delete_Departamento', ['as' => 'delete_DepartamentoDB']);
});
// PROYECTOS
$routes->group('Proyecto', ['filter' => 'authGuard'], ['namespace' => 'App\Controllers'], function ($routes) {
	//PROYECTOS
	$routes->get('index', 'Proyecto::index', ['as' => 'listaProyectoView']);
	$routes->get('getListaProyectosBD', 'Proyecto::getListaProyectos', ['as' => 'getListaProyectosBD']);
	$routes->get('nuevoProyectoView', 'Proyecto::nuevoProyectoView', ['as' => 'nuevoProyectoView']);
	$routes->get('modificaProyectoView/(:any)', 'Proyecto::modificaProyectoView/$1', ['as' => 'modificaProyectoView']);


	// CRUD
	$routes->post('insert_ProyectoDB', 'Proyecto::insert_ProyectoDB', ['as' => 'insert_ProyectoDB']);
	$routes->post('delete_ProyectoDB', 'Proyecto::delete_Proyecto', ['as' => 'delete_ProyectoDB']);
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
