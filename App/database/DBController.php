<?php

namespace App\Database;

use mysqli;
use PDO;

class DBController
{
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "shopee";
    protected $port = 3306;

    public $con = null;

    public function __construct()
    {
        $this->con = new PDO("mysql:host=$this->host:$this->port;dbname=$this->database", $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public function getConnection(): PDO
    {
        return $this->con;
    }

    public function closeConnection(): void
    {
        $this->con = null;
    }
}
