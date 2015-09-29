<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/**
 * Administrator route part
 * */
$route['admin']              = 'admin/view';
$route['admin/logout']       = 'admin/logout';
$route['admin/login']        = 'admin/login';
$route['admin/(:any)']       = 'admin/view/$1';
$route['ajax_admin/(:any)']  = 'admin/ajax/$1';
$route['ajax_admin/(:any)/(:any)']  = 'admin/ajax/$2/$1';
$route['ajax_admin/(:any)/(:any)/(:num)']  = 'admin/ajax/$2/$1/$3';

/**
 * Client rout part
 * */
$route['(\w{2})/client/(:any)'] = 'client/client_action/$2';

$route['default_controller'] = 'main/page';
$route['404_override']       = 'main/page/error';
$route['translate_uri_dashes'] = FALSE;

$route['(\w{2})/action/(.*)']       = 'action/$2';

$route['(\w{2})/cargo/show/(:num)'] = 'client/cargo/get/$2';
$route['(\w{2})/rating/show/(:num)'] = 'client/rating/get/$2';

$route['(\w{2})/langswitch/(.*)']   = 'langswitch/$2';
$route['(\w{2})/user/(.*)']         = 'user/page/$2';
$route['(\w{2})/register/regions']  = 'register/regions';
$route['(\w{2})/register/cities']   = 'register/cities';
$route['(\w{2})/register/(.*)']     = 'register/page/$2';

$route['(\w{2})/(.*)']              = 'main/page/$2';
$route['(\w{2})'] = $route['default_controller'];
