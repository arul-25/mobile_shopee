<?php

namespace App\Repository;

use App\Entity\EntityCart;

class RepositoryCart
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

    public function insertIntoCart(EntityCart $cart)
    {
        if ($this->db != null and $cart != null) {

            /* $columns = implode(',', array_keys($params));
            $totalValue = count(array_values($params));

            $values = array_values($params);
            $bindingParams = "?";

            for ($i = 1; $i < $totalValue; $i++) {
                $bindingParams .= ",?";
            }

            $query_string = sprintf("INSERT INTO cart(%s)VALUES(%s)", $columns, $bindingParams);

            $statment = $this->db->prepare($query_string);
            $statment->execute($values); */

            $statment = $this->db->prepare("INSERT INTO cart(user_id,item_id)VALUES(?,?)");
            $result = $statment->execute([$cart->getUser_id(), $cart->getItem_id()]);

            if ($result) {
                header("Location:" . $_SERVER['PHP_SELF']);
            }
        }
    }

    public function getData(): ?array
    {
        $carts = [];
        $data = $this->db->query("SELECT * FROM cart");

        foreach ($data->fetchAll(\PDO::FETCH_ASSOC) as $row) {

            $cart = new EntityCart($row);
            $cart->setCart_id($row['cart_id']);
            $carts[] = $cart;
        }

        return $carts;
    }
}
