<?php

namespace App\Repository;

use App\Entity\EntityWishlist;

class RepositoryWishlist
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

    public function getData(): ?array
    {
        $carts = [];
        $data = $this->db->query("SELECT * FROM wishlist");

        foreach ($data->fetchAll(\PDO::FETCH_ASSOC) as $row) {

            $cart = new EntityWishlist($row);
            $cart->setCart_id($row['cart_id']);
            $carts[] = $cart;
        }

        return $carts;
    }

    public function addToCart($item_id = null)
    {
        if ($item_id != null) {
            $query = "INSERT INTO cart SELECT * FROM wishlist WHERE item_id = $item_id; ";
            $query .= "DELETE FROM wishlist WHERE item_id = $item_id;";

            $result = $this->db->exec($query);

            if ($result) {
                header("Location:" . $_SERVER['PHP_SELF']);
            }

            return $result;
        }
    }

    public function deleteWishlist($item_id = null)
    {
        if ($item_id != null) {
            $result = $this->db->exec("DELETE FROM wishlist WHERE item_id = $item_id");
            if ($result) {
                header("Location:" . $_SERVER['PHP_SELF']);
            }

            return $result;
        }
    }
}
