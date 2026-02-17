<?php declare(strict_types=1);

namespace App\Controllers;

use Asterios\Core\Controller;
use Asterios\Core\Exception\ConfigLoadException;
use Asterios\Core\Exception\ViewTemplateAccessException;
use Asterios\Core\Logger;
use Asterios\Core\View;
class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->set_content_type('text/html;');
    }

    public function get_index(): void
    {
        Logger::forge()->info('Route hit: IndexController::get_index. See config/routes.php for more info.');
        $responseData = [
            'headline' => 'Build modern PHP applications.',
            'asterios-php' => 'AsteriosPHP',
        ];
        try
        {
            $data = View::forge('sites/index', false, $responseData)
                ->renderAsString();
            $this->response($data);
        } catch (ConfigLoadException|ViewTemplateAccessException $e)
        {
            Logger::forge()->fatal('Error rendering view!', ['exception' => $e->getMessage()]);
        }
    }
}