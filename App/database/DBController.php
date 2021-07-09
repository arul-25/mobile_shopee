<?php

namespace App\Database;

use PDO;

class DBController
{
    public static function getConnection(): PDO
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "shopee";
        $port = 3306;
        return new PDO("mysql:host=$host:$port;dbname=$database", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}
