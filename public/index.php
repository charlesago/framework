<?php

use Core\Kernel\Kernel;

require_once "../vendor/autoload.php";

//$router = new \Core\Router\Router();
//$router->addRoute([
//    "route"=> "/pizza/create",
//    "c&m"=>[
//        PizzaController::class,
//        "create"
//    ]
//]);
//$router->addRoute([
//    "route"=> "/pizza/23",
//    "c&m"=>[
//        PizzaController::class,
//        "index"
//    ]
//]);

Kernel::run();