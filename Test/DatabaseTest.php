<?php

namespace App;

use App\Database\DBController;
use Exception;
use PHPUnit\Framework\TestCase;


class DatabaseTest extends TestCase
{
    public function testDatabase()
    {
        $con = new DBController();
        $database = $con->getConnection();
        self::assertEquals("PDO", get_class($database));
    }

    public function testDatabaseFailed()
    {
        $this->expectException(Exception::class);
        $con = new DBController();
    }
}
