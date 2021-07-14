<?php

namespace App\Cart;

use App\Database\DBController;
use App\Entity\EntityCart;
use App\Repository\RepositoryCart;
use Exception;
use PHPUnit\Framework\TestCase;

class RepositoryCartTest extends TestCase
{
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
}
