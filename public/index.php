<?php declare(strict_types=1);

error_reporting(E_ALL);

use Asterios\Core\Exception\RouterException;
use Asterios\Core\Router;

require_once '../vendor/autoload.php';

require_once '../bootstrap/constants.php';
require_once '../bootstrap/bootstrap.php';

$protected_directory = str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']);

$router = new Router();
$router->setNamespace('App\Controller');
$router->setMiddlewareNamespace('App\Middleware');
try {
    $router->run();
} catch (RouterException $e) {
    die;
}