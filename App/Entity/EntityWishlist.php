<?php

namespace App\Entity;

class EntityWishlist
{
    private ?int $cart_id, $user_id, $item_id;

    public function __construct(array $data)
    {
        $this->user_id = $data['user_id'];
        $this->item_id = $data['item_id'];
    }

    public function getCart_id(): int
    {
        return $this->cart_id;
    }

    public function setCart_id(int $cart_id): void
    {
        $this->cart_id = $cart_id;
    }

    public function getUser_id(): int
    {
        return $this->user_id;
    }

    public function setUser_id(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getItem_id(): int
    {
        return $this->item_id;
    }

    public function setItem_id(int $item_id): void
    {
        $this->item_id = $item_id;
    }
}
