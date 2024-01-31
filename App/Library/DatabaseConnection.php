<?php

namespace App\Library;

use PDO;

class DatabaseConnection
{
    private \mysqli $mysqli;
    public function __construct(array $config)
    {
        $defaultOptions = [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        try {
            $this->mysqli = new \mysqli($config['host'], $config['user'], $config['password'],  $config['database']
            );
        } catch (\mysqli_sql_exception $exception) {
            throw new \mysqli_sql_exception($exception->getMessage(), (int)$exception->getCode());
        }
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->mysqli, $name], $arguments);
    }
}