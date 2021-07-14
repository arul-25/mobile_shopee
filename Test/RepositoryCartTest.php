<?php

namespace App\Cart;

use App\Database\DBController;
use App\Entity\EntityCart;
use App\Repository\RepositoryCart;
use Exception;
use PHPUnit\Framework\TestCase;

class RepositoryCartTest extends TestCase
{
    private static \PDO $db;
    private static RepositoryCart $repositoryCart;

    public static function setUpBeforeClass(): void
    {
        self::$db = DBController::getConnection();
        self::$repositoryCart = new RepositoryCart(self::$db);
    }

    public function testInsertToCartSuccess()
    {
        $cart = new EntityCart([
            "user_id" => 7,
            "item_id" => 12
        ]);

        $db = DBController::getConnection();

        $repostiory = new RepositoryCart(DBController::getConnection());

        $repostiory->insertIntoCart($cart);

        $statment = $db->query("SELECT * FROM cart WHERE user_id = 7");

        $result = $statment->fetch(\PDO::FETCH_ASSOC);

        $cartResult = new EntityCart([
            "user_id" => $result['user_id'],
            "item_id" => $result['item_id']
        ]);

        $this->assertNotNull($cartResult);
        $this->assertEquals($cart, $cartResult);

        $db = null;
    }

    public function testInsertToCartFailed()
    {
        $this->expectException(Exception::class);

        $cart = new EntityCart([
            "user_id" => 2,
            "item_id" => 7
        ]);

        $repostiory = new RepositoryCart(DBController::getConnection());

        $repostiory->insertIntoCart($cart);
    }

    public function testGetDataSuccess()
    {
        $carts = self::$repositoryCart->getData();

        $db = DBController::getConnection();
        $queryCart = $db->query("SELECT * FROM cart");

        $resultcarts = [];
        foreach ($queryCart->fetchAll(\PDO::FETCH_ASSOC) as $row) {
            $cart = new EntityCart($row);
            $cart->setCart_id($row['cart_id']);
            $resultcarts[] = $cart;
        }

        self::assertNotNull($carts);
        self::assertNotEmpty($carts);
        self::assertEquals($carts, $resultcarts);
    }

    public function testDeleteCartSuccess()
    {
        $result = self::$repositoryCart->deleteCart(5);
        $this->assertTrue($result, "Gagal Delete");
    }

    public function testDeleteCartFailed()
    {
        $result = self::$repositoryCart->deleteCart(5);
        $this->assertNotTrue($result, "Sukses Delete");
    }
}
