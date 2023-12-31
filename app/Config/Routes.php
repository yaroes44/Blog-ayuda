<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/',['namespace' => 'App\Controllers\Front'],function($routes){

	$routes->get('', 'Home::index', ['as' => 'home']);
	$routes->get('articulo/(:segment)', 'Home::article/$1', ['as' => 'article']); //segemnt un argumento que se puede obtener desde get
	
});

$routes->group('auth',['namespace' => 'App\Controllers\Auth'],function($routes){

	$routes->get('registro', 'Register::index', ['as' => 'register']);
	$routes->post('store', 'Register::store');
	$routes->get('login', 'Login::index', ['as' => 'login']);
	$routes->post('check', 'Login::signin', ['as' => 'signin']);
	$routes->get('logout', 'Login::signout', ['as' => 'signout']);

});


$routes->group('admin',['namespace' => 'App\Controllers\Admin', 'filter' => 'auth:admin,user'],function($routes){ 

	$routes->get('articulos', 'Posts::index', ['as' => 'posts']);
	$routes->get('articulos/crear', 'Posts::create', ['as' => 'posts_create']);
	$routes->post('articulos/guardar', 'Posts::store', ['as' => 'posts_store']);

	$routes->get('categorias', 'Categories::index', ['as' => 'categories']);
	$routes->get('categorias/crear', 'Categories::create', ['as' => 'categories_create']);
	$routes->post('categorias/guardar', 'Categories::store', ['as' => 'categories_store']);

	$routes->get('categorias/editar/(:any)', 'Categories::edit/$1', ['as' => 'categories_edit']);
	$routes->post('categorias/actualizar', 'Categories::update', ['as' => 'categories_update']);
	$routes->get('categorias/eliminar/(:any)', 'Categories::delete/$1', ['as' => 'categories_delete']);
});
