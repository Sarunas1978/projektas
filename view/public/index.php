<?php
require_once '../vendor/autoload.php';

use app\controller\SiteController;
use app\core\Application;
use app\core\AuthController;


$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/about', [SiteController::class, 'about']);
//$app->router->get('/about', 'about');
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->get('/fn', function () {
    return 56 + 76;
});
// we create post path
$app->router->post('/contact', [SiteController::class, 'handleContact']);

// routes for login and register
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();