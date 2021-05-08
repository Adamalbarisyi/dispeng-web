<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Auth';
$route['register'] = 'Auth/register';
$route['forget'] = 'Auth/forgotPassword';


$route['admin'] = 'Admin/dashboard';
$route['user'] = 'User/dashboard';

