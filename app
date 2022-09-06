<?php

use App\Hello;
use App\Show;
use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('');

$app->add(new Hello());
$app->add(new Show());

$app->run();
