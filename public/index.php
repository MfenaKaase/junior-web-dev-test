<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\ProductController;


$router = new Router();

$router->get('/', [ProductController::class, 'index']);
$router->get('/products', [ProductController::class, 'index']);
$router->post('/', [ProductController::class, 'deleteProducts']);
$router->get('/addproducts', [ProductController::class, 'addProducts']);
$router->post('/addproducts', [ProductController::class, 'addProducts']);

$router->resolve();