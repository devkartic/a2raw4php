<?php

namespace App\Library;

use App\Config\Config;

class QueryBuilder
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