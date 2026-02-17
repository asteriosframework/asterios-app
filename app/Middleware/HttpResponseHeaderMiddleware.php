<?php declare(strict_types=1);

namespace App\Middleware;

use Asterios\Core\Logger;

class HttpResponseHeaderMiddleware
{
    public function handle(): bool
    {
        Logger::forge()->info('Middleware hit: HttpResponseHeaderMiddleware::class. See config/routes.php for more info.');
        header_remove('X-Powered-By');

        return true;
    }
}