<?php

namespace App;

use App\Database\DBController;
use App\Entity\EntityProduct;
use App\Repository\RepositoryProduct;
use Exception;
use PDO;
use PHPUnit\Framework\TestCase;

class RepositoryProductTest extends TestCase
{
    private static \PDO $db;

    private static RepositoryProduct $repositoryProduct;

    public static function setUpBeforeClass(): void
    {
        self::$db = DBController::getConnection();
        self::$repositoryProduct = new RepositoryProduct(self::$db);
    }

    public function testGetDataSuccess()
    {
        $products = self::$repositoryProduct->getData(["item_id" => 2]);

        $db = DBController::getConnection();
        $queryProduct = $db->query("SELECT * FROM product WHERE item_id = 2");

        $resultProducts = [];
        foreach ($queryProduct->fetchAll(\PDO::FETCH_ASSOC) as $row) {
            $product = new EntityProduct($row);
            $product->setItem_id($row['item_id']);
            $resultProducts[] = $product;
        }

        self::assertNotNull($products);
        self::assertNotEmpty($products);
        self::assertEquals($products, $resultProducts);
    }
    public function testGetDataFailed()
    {
        $this->expectException(Exception::class);
        $products = self::$repositoryProduct->getData();
    }

    public function testGetDataBySuccess()
    {
        $products = self::$repositoryProduct->getDataBy(["item_id" => 2]);

        $db = DBController::getConnection();
        $stment = $db->query("SELECT * FROM product WHERE item_id = 2");
        $resultProducts = $stment->fetch(\PDO::FETCH_ASSOC);

        $prodcut = new EntityProduct($resultProducts);
        $prodcut->setItem_id($resultProducts['item_id']);

        $this->assertEquals($prodcut, $products);

        $db = null;
    }
}
