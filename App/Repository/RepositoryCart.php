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

    public function deleteCart($cart_id = null): bool
    {
        if ($cart_id != null) {
            $result = $this->db->exec("DELETE FROM cart WHERE cart_id = $cart_id");
            if ($result) return true;
            return false;
        }
    }

    public function getCartId(): ?array
    {
        $cart = $this->getData();
        $data = [];
        foreach ($cart as $row) {
            $data[] = $row->getItem_id();
        }
        return $data;
    }

    public function saveForLater($item_id = null)
    {
        if ($item_id != null) {
            $query = "INSERT INTO wishlist SELECT * FROM cart WHERE item_id = $item_id; ";
            $query .= "DELETE FROM cart WHERE item_id = $item_id;";

            $result = $this->db->exec($query);

            if ($result) {
                header("Location:" . $_SERVER['PHP_SELF']);
            }

            return $result;
        }
    }
}
