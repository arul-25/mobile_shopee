<?php

use App\Entity\EntityCart;

shuffle($produck);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['new_phones_submit'])) {
        $cartEntity = new EntityCart([
            "user_id" => $_POST['user_id'],
            "item_id" => $_POST['item_id']
        ]);
        $cart->insertIntoCart($cartEntity);
    }
}
?>

<!-- New Phones -->
<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($produck as $row) : ?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="<?= $row->getItem_image(); ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?= $row->getItem_name() ?? "unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span><?= $row->getItem_price() ?? "0"; ?></span>
                            </div>
                            <form action="" method="POST">
                                <input type="hidden" name="item_id" value="<?= $row->getItem_id() ?? "1"; ?>">
                                <input type="hidden" name="user_id" value="<?= 1; ?>">
                                <button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- End Owl Carousel -->
    </div>
</section>
<!-- End New Phones -->