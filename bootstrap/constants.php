<?php declare(strict_types=1);

use Asterios\Core\Config;

const DIR_SEP = DIRECTORY_SEPARATOR;

$documentRoot = $_SERVER['DOCUMENT_ROOT'];

$protectedDirectory = str_replace('/public', '', $documentRoot);
define('ROOT_PATH', $protectedDirectory . DIR_SEP);

$appPath = ROOT_PATH . 'app' . DIR_SEP;
define('APP_PATH', $appPath);

const DEFAULT_CONFIG = 'default';
const ASSETS_PATH = DIR_SEP . 'assets' . DIR_SEP;
const IMAGE_PATH = ASSETS_PATH . 'images/';
const MEDIA_PATH_NAME = 'media' . DIR_SEP;
const CSS_PATH = ASSETS_PATH . 'css/';
const JS_PATH = ASSETS_PATH . 'js/';
const MIGRATIONS_PATH = ROOT_PATH . '/database/migrations/';
const SEEDER_PATH = ROOT_PATH . '/database/seeder/';

Config::set_memory('DOCROOT', $documentRoot . DIR_SEP);
Config::set_config_path(ROOT_PATH . 'config' . DIR_SEP);
Config::set_memory('ENV', ROOT_PATH . '.env');
Config::set_memory('MAILTPLPATH', ROOT_PATH . 'mailtemplates' . DIR_SEP);
Config::set_memory('MEDIA_PATH', $documentRoot . ASSETS_PATH . MEDIA_PATH_NAME);
Config::set_memory('MEDIA_IMAGE_PATH', Config::get_memory('MEDIA_PATH') . 'images' . DIR_SEP);
Config::set_memory('MEDIA_GALLERY_PATH', Config::get_memory('MEDIA_PATH') . 'gallery' . DIR_SEP);
Config::set_memory('MEDIA_DOCUMENTS_PATH', Config::get_memory('MEDIA_PATH') . 'documents' . DIR_SEP);