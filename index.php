<?php

require_once './vendor/autoload.php';
require_once 'config.php';

$app = new Core\Http\Router;

$app->Route(URL);
