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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;


// custom routes for Front-end

$route['aboutus'] = 'Home/aboutus';
$route['infrastructure'] = 'Home/infrastructure';
$route['achievements'] = 'Home/achievements';
$route['calendar'] = 'Home/calendar';
$route['classes'] = 'Home/classes';
$route['results'] = 'Home/results';
$route['curriculum'] = 'Home/curriculum';
$route['admission'] = 'Home/admission';
$route['gallery'] = 'Home/gallery';
$route['contact'] = 'Home/contact';

$route['sitemaps'] = 'Home/sitemaps';
$route['privacypolicy'] = 'Home/privacypolicy';
$route['disclaimer'] = 'Home/disclaimer';


// custom routes for Back-end

$route['admin/update_profile'] = 'Users/update_profile';

$route['admin/users_view'] = 'Users';
$route['admin/users_add'] = 'Users/create';
$route['admin/users_edit/(:num)'] = 'Users/edit/$1';

$route['admin/admission_view'] = 'Inquiry/view_admission_enquiry';
$route['admin/admission_export'] = 'Inquiry/export_admission_enquiry';
$route['admin/admission_details/(:num)'] = 'Inquiry/addmission_details/$1';

$route['admin/contact_view'] = 'Contact/view_contact';
$route['admin/contact_export'] = 'Contact/export';
$route['admin/contact_details/(:num)'] = 'Contact/view_details/$1';

$route['admin/marquee_view'] = 'Marque/view';
$route['admin/marquee_add'] = 'Marque/create';
$route['admin/marquee_edit/(:num)'] = 'Marque/edit/$1';


$route['admin/notice_view'] = 'Notice/view';
$route['admin/notice_add'] = 'Notice/create';
$route['admin/notice_edit/(:num)'] = 'Notice/edit/$1';


$route['admin/slider_view'] = 'Slider/view';
$route['admin/slider_add'] = 'Slider/create';
$route['admin/slider_edit/(:num)'] = 'Slider/edit/$1';


$route['admin/gallery_view'] = 'Gallery/view';
$route['admin/gallery_add'] = 'Gallery/create';
$route['admin/gallery_edit/(:num)'] = 'Gallery/edit/$1';
