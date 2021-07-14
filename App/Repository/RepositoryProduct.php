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

    public function __destruct()
    {
        $this->db = null;
    }

    public function getData(array $where = null): ?array
    {
        $products = [];
        $query = "SELECT * FROM product";

        if ($where) {
            $keys = implode("", array_keys($where));
            $query .=  " WHERE $keys = ?";
        }

        $stmnt = $this->db->prepare($query);
        $where != null ? $stmnt->execute(array_values($where)) : $stmnt->execute();


        foreach ($stmnt->fetchAll(\PDO::FETCH_ASSOC) as $row) {

            $product = new EntityProduct($row);
            $product->setItem_id($row['item_id']);
            $products[] = $product;
        }

        return $products;
    }

    public function getDataBy(array $where): ?EntityProduct
    {
        $keys = implode("", array_keys($where));
        $query = "SELECT * FROM product WHERE $keys = ?";

        $statement = $this->db->prepare($query);
        $statement->execute(array_values($where));

        if ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $product = new EntityProduct($row);
            $product->setItem_id($row['item_id']);
            return $product;
        } else {
            return null;
        }
    }
}
