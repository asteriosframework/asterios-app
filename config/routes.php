<?php declare(strict_types=1);

use App\Controller\IndexController;
use Asterios\Core\Support\Route;

Route::group(['middleware' => ['HttpResponseHeader']], static function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('index.html', [IndexController::class, 'index']);
});