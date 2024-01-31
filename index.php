<?php

require_once 'vendor/autoload.php';

use App\Controllers\UserController;
use App\Config\Config;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

try {
    $obj = new UserController(new Config($_ENV));
    $obj->test();
}catch (\Exception $exception){
    echo $exception->getMessage();
}

