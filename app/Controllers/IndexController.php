<?php declare(strict_types=1);

namespace App\Controllers;

use Asterios\Core\Controller;
use Asterios\Core\Exception\LoggerException;
use Asterios\Core\Logger;
use Asterios\Core\View;
use JsonException;

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->setContentType('text/html');
    }

    public function get_index(): void
    {
        try {
            Logger::forge()
                ->info('Route hit: IndexController::get_index. See config/routes.php for more info.');
        } catch (LoggerException) {
        }

        $responseData = [
            'title' => 'AsteriosPHP - Build modern PHP applications.',
            'headline' => 'Build modern PHP applications.',
            'asteriosPHP' => 'AsteriosPHP',
            'date' => date('Y'),
        ];
        try
        {
            $data = View::forge('sites/index', false, $responseData)
                ->renderAsString();
            $this->response($data);
        } catch (JsonException $e)
        {
            try {
                Logger::forge()
                    ->fatal('Error rendering view!', ['exception' => $e->getMessage()]);
            } catch (LoggerException) {

            }
        }
    }
}