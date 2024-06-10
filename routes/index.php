<?php 
$router = new \Bramus\Router\Router(); 

require_once __DIR__.'/admin.php';
require_once __DIR__.'/cilent.php';

$router->run();