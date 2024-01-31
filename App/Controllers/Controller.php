<?php

namespace App\Controllers;

use App\Config\Config;
use App\Library\DatabaseConnection;

class Controller
{

    private static DatabaseConnection $connection;
    public function __construct(protected Config $config)
    {
        static::$connection = new DatabaseConnection($config->database ?? []);
    }

    public static function db(): DatabaseConnection
    {
        return static::$connection;
    }
}