<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Animal');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Animal::index');
$routes->match(['get','post'], 'registrar', 'registrar::index');



$routes->get('Usuario/listar', 'Usuario::index');
$routes->match(['get','post'],'login', 'Login::index');
$routes->get('admin', 'Animal::poslogin');
$routes->get('/logout','login::logout');
$routes->match(['get', 'post', 'delete'], 'user/remover/(:num)', 'Login::deletar/$1');
$routes->post('user/atualizar', 'Login::atualizar');


$routes->get('listaranimais','Animal::listaranimais');
$routes->get('voluntarios','Animal::voluntarios');
$routes->get('sobrenos','Animal::sobrenos');
$routes->get('suporte','Animal::suporte');


//rotas adm
$routes->match(['get','post'], 'adocaoadmn', 'CadastroAnimalController::index');
$routes->match(['get','post'], 'listaranimaisadmn', 'CadastroAnimalController::listaranimaisadmnn');
$routes->match(['get','post'], 'doacaoadmn', 'CadastroAnimalController::index');
$routes->match(['get','post'], 'voluntariosadmn', 'Animal::voluntariosadmn');
$routes->match(['get','post'], 'sobrenosadmn', 'CadastroAnimalController::index');
$routes->match(['get','post'], 'suporteadmn', 'CadastroAnimalController::index');


//novas rotas com api 
$routes->match(['get','post'], 'cadastraranimal', 'CadastroAnimalController::index');
$routes->match(['get','post'], 'enviarloginapicadastro', 'CadastroAnimalController::cadastrar');
$routes->match(['get','post'], 'animaislista', 'CadastroAnimalController::animaislista');
$routes->match(['get','post'], 'animal/atualizar', 'CadastroAnimalController::animalatualizar');
$routes->match(['get','post'], 'cadastrarusuarioapi', 'Registrar::cadastrarusuarioapi');
$routes->match(['get','post'], 'login...', 'login::login');
$routes->post('enviaratualizarapi', 'CadastroAnimalController::atualizar');




//rotas usuario logado adm
$routes->get('admin', 'Admin\Home::index');









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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
