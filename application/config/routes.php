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
$route['manufacturer-product/(.+)']='welcome/manufacturer_product/$1';
$route['category-product/(.+)']='welcome/category_product/$1';//manufacturer-product
$route['product-edit/(.+)']='products/product_edit/$1'; //category-product
$route['product-delete/(.+)']='products/product_delete/$1';
$route['product-inactive/(.+)']='products/product_inactive/$1';
$route['product-active/(.+)']='products/product_active/$1';
$route['manage-product']='products/manage_products';
$route['add-product']='products/add_products';


$route['edit-category/(.+)']= 'products/edit_category/$1';
$route['change-category-status/(.+)/(.+)']='products/change_category_status/$1/$2';
$route['all-category']='products/show_all_category';
$route['add-category']='products/show_add_category_from';
$route['add-manufacturer']='products/add_manufacturer';
$route['manage-manufacturer']='products/manage_manufacturer';
$route['change-manufacturer-status/(.+)/(.+)']='products/change_manufacturer_status/$1/$2';
$route['edit-manufacturer-form/(.+)']='products/edit_manufacturer_form/$1';


$route['register-admin']='admin/show_admin_register_form';
$route['admin-logout'] ='admin_login/admin_logout';
$route['admin-dashboard'] = 'admin/show_dashboard';
$route['admin-login'] = 'admin_login/check_admin_login';
$route['admin'] = 'admin_login';
$route['home-page'] = 'welcome';        
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
