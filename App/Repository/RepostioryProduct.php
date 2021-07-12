<?php

namespace App\Repository;

use App\Entity\EntityProduct;

class RepositoryProduct
{
    private $db = null;

    public function __construct(\PDO $db)
    {
        if (!isset($db)) return null;
        $this->db = $db;
    }

    public function getData(): ?array
    {
        $products = [];
        $data = $this->db->query("SELECT * FROM product");

        foreach ($data->fetchAll(\PDO::FETCH_ASSOC) as $row) {

            $product = new EntityProduct($row);
            $product->setItem_id($row['item_id']);
            $products[] = $product;
        }

        return $products;
    }
}
