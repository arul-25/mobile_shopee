<?php

use App\Entity\EntityCart;

$brand = array_map(function ($pro) {
    return $pro->getItem_brand();
}, $repositoryProduct->getData());
$unique = array_unique($brand);
sort($unique);
shuffle($produck);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['special_price_submit'])) {
        $cartEntity = new EntityCart([
            "user_id" => $_POST['user_id'],
            "item_id" => $_POST['item_id']
        ]);
        $cart->insertIntoCart($cartEntity);
    }
}
?>
<!-- Special Price -->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <?php foreach ($unique as $row) : ?>
                <button class="btn" data-filter=".<?= $row; ?>"><?= ucfirst($row); ?></button>
            <?php endforeach; ?>
        </div>

        <div class="grid">
            <?php array_map(function ($item) { ?>
                <div class="grid-item border <?= $item->getItem_brand() ?? "Brand"; ?>">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="product.php?item_id=<?= $item->getItem_id(); ?>"><img src="<?= $item->getItem_image() ?? "./assets/products/13.png"; ?>" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?= $item->getItem_name() ?? "unknown"; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?= $item->getItem_price() ?? "0"; ?></span>
                                </div>
                                <form action="" method="POST">
                                    <input type="hidden" name="item_id" value="<?= $item->getItem_id() ?? "1"; ?>">
                                    <input type="hidden" name="user_id" value="<?= 1; ?>">
                                    <button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }, $produck) ?>
        </div>
    </div>
</section>
<!-- end Special Price -->