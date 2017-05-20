<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';	
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

// GENERAL PAGES
$route['v1/patient'] = "dashboard/patientRecords";
$route['v1/dentalrecords'] = "dashboard/dentalRecords";
$route['v1/dentalservice'] = "dashboard/dentalService";
$route['v1/dentalinventory'] = "dashboard/dentalInventory";
$route['v1/logs'] = "dashboard/logs";

// PATIENT MODULE
$route['v1/addpatient'] = "patient/addPatient";
$route['v1/fetchpatient/(:num)'] = "patient/getPatient/$1";
$route['v1/fetchallpatient'] = "patient/getAllPatient";
$route['v1/updatepatient'] = "patient/updatePatient";
$route['v1/archivepatient'] = "patient/archivePatient";

// SERVICE MODULE
$route['v1/addservice'] = "services/addService";
$route['v1/updateservice'] = "services/updateService";
$route['v1/getallservices'] = "services/getAllServices";
$route['v1/getservice/(:num)'] = "services/getService/$1";
$route['v1/getexistingservice'] = "services/getExistingService";

// INVENTORY MODULE
$route['v1/additem'] = "inventory/addItem";
$route['v1/getitem/(:num)'] = "inventory/getItem/$1";
$route['v1/getallitems'] = "inventory/getAllItems";
$route['v1/updateitem'] = "inventory/updateItem";
$route['v1/getexistingitem'] = "inventory/getExistingItem";

// LOGS MODULE

// USER MODULE
$route['v1/logout'] = "login/logout";
// MEMBERSHIP MODULE

$route['default_controller'] = "login/index";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */