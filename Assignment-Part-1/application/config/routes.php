<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Assignments';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Assignments/(:num)'] = 'Assignments/index/$1';