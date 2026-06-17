<?php

define('PIN_START_TIME', microtime(true));
define('PIN_START_MEM', memory_get_usage());

// Tiempo mínimo entre peticiones en milisegundos (0 para desactivar)
define('RATE_LIMIT_MS', 500);

//cargar la sesion de php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

use Parina\Core\Router;
use Parina\Core\Kernel;

require_once '../vendor/autoload.php';

$router = new Router();

// Public Routes
$router->add('GET', '/',         Parina\Modules\Public\HomeHandler::class);
$router->add('GET', '/about',    Parina\Modules\Public\AboutHandler::class);
$router->add('GET', '/setup',    Parina\Modules\Public\SetupHandler::class);
$router->add('GET', '/login',    Parina\Modules\Public\LoginFormHandler::class);
$router->add('POST', '/login',    Parina\Modules\Public\LoginCheckHandler::class);

// Encrypted routes resolver based on (/do?=...)
$hashResolver = new Parina\Core\HashResolver([
    'admin/home' => Parina\Modules\Admin\AdminHandler::class,
    'admin/users' => Parina\Modules\Admin\UsersListHandler::class,
    'logout' => Parina\Modules\Private\LogoutHandler::class
]);

// Private Routes
$router->add('GET', '/do', $hashResolver, [
    Parina\Shared\Middlewares\RateLimit::class,
    Parina\Shared\Middlewares\RequestSize::class, 
    Parina\Shared\Middlewares\SameOrigin::class,
    Parina\Shared\Middlewares\Csrf::class,
    Parina\Shared\Middlewares\Auth::class,
    Parina\Shared\Middlewares\Acl::class,
]);


//Kernel dispatcher
$kernel = new Kernel($router);
$kernel->run();
