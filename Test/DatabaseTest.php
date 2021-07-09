<?php

namespace App;

use App\Database\DBController;
use Exception;
use PHPUnit\Framework\TestCase;


class DatabaseTest extends TestCase
{
    public function testDatabaseSuccess()
    {
        $con = DBController::getConnection();

        self::assertEquals("PDO", get_class($con));
    }

    public function testDatabaseFailed()
    {
        $this->expectException(Exception::class);
        $con = DBController::getConnection();
    }
}
