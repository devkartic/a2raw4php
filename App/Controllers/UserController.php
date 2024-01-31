<?php

namespace App\Controllers;

use App\Config\Config;

class UserController extends Controller
{
    public function __construct(Config $config)
    {
        parent::__construct($config);
    }

    public function test(): void
    {
        $db = self::db();
        $db1 = self::db();
        $db2 = self::db();

        var_dump($db === $db1, $db1 === $db2, $db === $db2);

        echo '<pre>';
        print_r($db);
    }
}