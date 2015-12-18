<?php

/**
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */
error_reporting(E_ALL);
ini_set('display_errors', 'On');
date_default_timezone_set('America/Mexico_City');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__DIR__)) . DS);
define('VENDOR_DIR', ROOT . 'vendor' . DS);
define('APP_DIR', ROOT . 'app' . DS);
define('ROUTES_DIR', APP_DIR . 'routes' . DS);
define('MODELS_DIR', APP_DIR . 'models' . DS);
define('VIEWS_DIR', APP_DIR . 'views' . DS);

require VENDOR_DIR . 'autoload.php';

$config     = include APP_DIR . 'config/global.php';
$configDB   = include APP_DIR . 'config/database.php';
$eloquent   = new Libs\SlimEloquent($configDB['connections'][$configDB['default']]);
$configSlim = include APP_DIR . 'config/slim.php';

$app = new Slim\App($configSlim);

foreach (glob(ROUTES_DIR . '*.route.php') as $route) {
    require_once $route;
}

$app->run();
