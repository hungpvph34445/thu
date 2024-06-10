<?php



session_start();

require 'vendor/autoload.php';

// use Admin\HungPh\Commons\Helper;(1)
// use Admin\HungPh\Commons\Helper; (2)

Dotenv\Dotenv::createImmutable(__DIR__)->load();

// Helper::debug($_ENV); (2)

// echo "<pre>";(3)
// print_r($_SERVER);(3)
// print_r($_SERVER['REQUEST_URI']);die; (4)

require_once __DIR__ . '/routes/index.php';

// Helper::debug('xxx'); (1)