<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';

$route['404_override'] = 'my404';

$route['translate_uri_dashes'] = FALSE;

$route['register']='auth/register';

$route['basicinfo']='auth/register2';

$route['login']='auth/login';

$route['logout']='auth/logout';

$route['forgot']='auth/forgot';


$route['home']='home';
$route['propose-an-job-offer']='home/job';


$route['user/profile/(:any)']='user/profile';


$route['edit/profile/(:any)']='user/profile_edit';

$route['update']='auth/update_pass';

$route['robot']='my404/my429';








$route['needs']='needs/index';


$route['addneed']='needs/addneed';



$route['connect']='connect/search';

$route['connect/your-class-room']='connect/classroom';



$route['admin/user-profile']='admin/userprofile';


$route['admin/admin-logout']='admin/admin_logout';

$route['admin/user-need']='admin/userneeds';
$route['admin/add-event']='admin/add_event';



$route['admin/view-event']='admin/view_event';

$route['admin/event-request']='admin/event_request';


$route['admin/needs-request']='admin/needs_request';

$route['admin/job-request']='admin/job';


$route['events/propose-an-event']='events/propose_event';

$route['gallery']='home/gallery';

