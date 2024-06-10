<?php

// $router->get('/', function () {
//     echo "trang chu";
// });

use Viet\HungPh\Controllers\Client\AboutController;
use Viet\HungPh\Controllers\Client\ContactController;
use Viet\HungPh\Controllers\Client\HomeController;
use Viet\HungPh\Controllers\Client\ProductController;

$router->get('/',               HomeController::class    . '@index');
$router->get('/about',          AboutController::class   . '@index');

$router->get('/contact',        ContactController::class . '@index');
$router->post('/contact/store', ContactController::class . '@store');

$router->get('/product',        ProductController::class . '@index');
$router->get('/product/{id}',   ProductController::class . '@detail');

