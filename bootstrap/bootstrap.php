<?php declare(strict_types=1);

use Asterios\Core\Asterios;
use Asterios\Core\Exception\AsteriosException;
use Asterios\Core\Exception\ConfigLoadException;
use Asterios\Core\Exception\LoggerException;
use Asterios\Core\Logger;
use Asterios\Core\View\Twig\TwigManager;
use Twig\Environment;

$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$protectedDirectory = str_replace('/public', '', $documentRoot);

require_once $protectedDirectory . '/config/routes.php';

Asterios::setEnvironment(Asterios::PRODUCTION);
Asterios::setTimezone('Europe/Berlin');
Asterios::setLocale(LC_TIME, 'de_DE.UTF-8');

try {
    Asterios::init();

    TwigManager::configure(static function(Environment $twig) {
        $twig->addGlobal('appName', 'AsteriosPHP');
    });

    Logger::forge()
        ->info('Bootstrap hit: Set global twig variable. See bootstrap/bootstrap.php for more info.');

} catch (ConfigLoadException|AsteriosException|LoggerException $e) {
    try {
        Logger::forge()
            ->error('Error initializing application!', ['exception' => $e->getMessage()]);
    } catch (LoggerException) {

    }
}