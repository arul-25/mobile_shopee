<?php
// require autoload composer

use App\Database\DBController;
use App\Repository\RepositoryProduct;

require_once __DIR__ . "/../vendor/autoload.php";

$db = DBController::getConnection();

$repoProduk = new RepositoryProduct($db);

if (isset($_POST['itemid'])) {
    $item_id = $_POST['itemid'];
    $result = $db->query("SELECT * FROM product WHERE item_id = $item_id");
    $produk = $result->fetch(\PDO::FETCH_ASSOC);
    echo json_encode($produk);
}
