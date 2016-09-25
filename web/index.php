<?php
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app['debug'] = true;

require_once __DIR__.'/config.php';

require_once __DIR__.'/controllers.php';

$app->run();