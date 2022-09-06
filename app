<?php

use App\Ask;
use Symfony\Component\Console\Application;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('Tell me about');

$app->add(new Ask());

$app->run();
