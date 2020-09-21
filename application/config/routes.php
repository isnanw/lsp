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
$route['default_controller'] = 'FrontEnd';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['projects.html'] = "website/projects";
$route['blog.html'] = "website/blog";
$route['contact.html'] = "website/contact";
$route['project/(:any)'] = 'website/detailproject/$1';
$route['post/(:any).html'] = 'website/detailpost/$1';

$route['auth/login'] = "auth/login";
$route['dashboard/articles.html'] = "dashboard/articles";
$route['dashboard/create/article.html'] = "dashboard/create_article";
$route['dashboard/edit/post/(:any).html'] = "dashboard/edit_article/$1";
$route['dashboard/edit/project/(:any)'] = "dashboard/edit_project/$1";
$route['dashboard/projects.html'] = "dashboard/projects";
$route['dashboard/create/project.html'] = "dashboard/create_project";
$route['dashboard/features.html'] = "dashboard/features";
$route['dashboard/skills.html'] = "dashboard/skills";
$route['dashboard/category.html'] = "dashboard/category";
$route['dashboard/files.html'] = "dashboard/files";
$route['dashboard/visitors.html'] = "dashboard/visitors";
$route['dashboard/messages.html'] = "dashboard/messages";
$route['dashboard/message/read/(:any)'] = 'dashboard/detailmessage/$1';
$route['download/(:any)'] = 'dashboard/download_file/$1';
$route['dashboard/setting.html'] = "auth/profile";
$route['dashboard/website.html'] = "auth/website";
$route['dashboard/about.html'] = "TentangKami/homeAbout";
$route['blog/(:any)'] = 'website/blog/$1';
$route['projects/(:any)'] = 'website/projects/$1';
$route['blog'] = 'website/blog';
$route['projects'] = 'website/projects';