<?php declare(strict_types=1);

use Asterios\Core\Asterios;
use Asterios\Core\Exception\AsteriosException;
use Asterios\Core\Exception\ConfigLoadException;
use Asterios\Core\Logger;

$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$protectedDirectory = str_replace('/public', '', $documentRoot);

require_once $protectedDirectory . '/config/routes.php';

Asterios::setEnvironment(Asterios::PRODUCTION);
Asterios::setTimezone('Europe/Berlin');
Asterios::setLocale(LC_TIME, 'de_DE.UTF-8');

try {
    Asterios::init();
} catch (ConfigLoadException|AsteriosException $e) {
    Logger::forge()
        ->error('Error initializing application!', ['exception' => $e->getMessage()]);
}