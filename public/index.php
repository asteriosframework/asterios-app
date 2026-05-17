<?php declare(strict_types=1);

use Asterios\Core\Exception\LoggerException;
use Asterios\Core\Exception\RouterException;
use Asterios\Core\Logger;
use Asterios\Core\Router;
use Asterios\Core\Session;

require_once '../vendor/autoload.php';

require_once '../bootstrap/constants.php';
require_once '../bootstrap/bootstrap.php';

$protected_directory = str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']);

Session::forge();

try {
    Logger::forge()
        ->info('Session hit: Start Session using PHPSessionStore with the Session Facade. See public/index.php for more info.');
}   catch (LoggerException) {
}

$router = new Router();
$router->setNamespace('App\Controllers');
$router->setMiddlewareNamespace('App\Middleware');
try {
    $router->run();
} catch (RouterException $e) {
    die;
}