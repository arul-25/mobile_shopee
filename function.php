<?php

use App\Database\DBController;
use App\Entity\EntityCart;
use App\Repository\RepositoryCart;
use App\Repository\RepositoryProduct;

$db = DBController::getConnection();

$repositoryProduct = new RepositoryProduct($db);

$produck = $repositoryProduct->getData();

$cart = new RepositoryCart($db);


/* $arr = [
    "user_id" => 5,
    "item_id" => 25,
];
$cart = new EntityCart($arr);

$cartProperty = get_class_vars(get_class($cart));

var_dump($cartProperty);
 */
// $cart->insertIntoCart($arr);
