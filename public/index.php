<?php
use app\controllers\SiteController;
use app\core\Application;
use app\controllers\AuthController;

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__ . '/../'));
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV["DB_DSN"],
        "user" => $_ENV["DB_USER"],
        "password" => $_ENV["DB_PASSWORD"],
    ],
];

$app = new Application(dirname(__DIR__), $config);
$app->router->get("/", [SiteController::class, "home"]);
$app->router->get("/contact", [SiteController::class, 'contact']);
$app->router->post("/contact", [SiteController::class, 'handleContact']);

// Auth
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->router->get('/shopCart', function() use ($app) {
    echo $app->router->renderFile('shopCart.php');
});
$app->router->get('/manageUser', function() use ($app) {
    echo $app->router->renderFile('manageUser.php');
});
$app->router->get('/detailProduct', function() use ($app) {
    echo $app->router->renderFile('detailProduct.php');
});
$app->router->get('/contact', function() use ($app) {
    echo $app->router->renderFile('contact.php');
});
$app->router->get('/filter_cat', function() use ($app) {
    echo $app->router->renderFile('filter_cat.php');
});
$app->run();