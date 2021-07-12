<?php

namespace App\Entity;

class EntityProduct
{
    private int $item_id;
    private ?string $item_brand;
    private ?string $item_name;
    private ?float $item_price;
    private ?string $image;
    private ?string $item_register;

    public function __construct(array $data)
    {
        $this->item_brand = $data['item_brand'];
        $this->item_name = $data['item_name'];
        $this->item_price = $data['item_price'];
        $this->image = $data['image'];
        $this->item_register = $data['item_register'];
    }

    /**
     * Get the value of item_id
     */
    public function getItem_id()
    {
        return $this->item_id;
    }

    /**
     * Set the value of item_id
     *
     * @return  self
     */
    public function setItem_id(int $item_id): void
    {
        $this->item_id = $item_id;
    }

    /**
     * Get the value of item_brand
     */
    public function getItem_brand(): string
    {
        return $this->item_brand;
    }

    /**
     * Set the value of item_brand
     *
     * @return  self
     */
    public function setItem_brand(string $item_brand): void
    {
        $this->item_brand = $item_brand;
    }

    /**
     * Get the value of item_name
     */
    public function getItem_name(): string
    {
        return $this->item_name;
    }

    /**
     * Set the value of item_name
     *
     * @return  self
     */
    public function setItem_name(string $item_name): void
    {
        $this->item_name = $item_name;
    }

    /**
     * Get the value of item_price
     */
    public function getItem_price(): float
    {
        return $this->item_price;
    }

    /**
     * Set the value of item_price
     *
     * @return  self
     */
    public function setItem_price(float $item_price): void
    {
        $this->item_price = $item_price;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Get the value of item_register
     */
    public function getItem_register()
    {
        return $this->item_register;
    }

    /**
     * Set the value of item_register
     *
     * @return  self
     */
    public function setItem_register($item_register)
    {
        $this->item_register = $item_register;

        return $this;
    }
}
