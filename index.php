<?php

// FRONT CONTROLLER

// Підключення файлів

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// виклик Router

$router = new Router();
$router->run();

?>