<?php $subTotal = 0; ?>
<?php $sumTotal = 0; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['delete-wishlist-submit'])) {
        $wishlist->deleteWishlist($_POST['item_id']);
    }

    if (isset($_POST['wishlist-submit'])) {
        $wishlist->addToCart($_POST['item_id']);
    }
}
?>
<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Whislist</h5>

        <!-- Shopping Cart items -->
        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($wishlist->getData() as $row) : ?>
                    <?php $produk = $repositoryProduct->getDataBy(["item_id" => $row->getItem_id()]); ?>

                    <?php $sumTotal += floatval($produk->getItem_price()); ?>
                    <?php $subTotal += 1; ?>
                    <!-- Cart Item -->
                    <div class="row border-top py-2 mt-3">
                        <div class="col-sm-2">
                            <img src="<?= $produk->getItem_image(); ?>" alt="<?= $produk->getItem_name(); ?>" class="img-fluid" style="height: 120px;">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20"><?= $produk->getItem_name(); ?></h5>
                            <small><?= $produk->getItem_brand(); ?></small>
                            <!-- Product Rating -->
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                            </div>
                            <!-- End Product Rating -->

                            <!-- Product Qty -->
                            <div class="qty d-flex pt-2">
                                <form action="" method="post">
                                    <input type="hidden" value="<?= $row->getItem_id(); ?>" name="item_id">
                                    <button type="submit" name="delete-wishlist-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete</button>
                                </form>
                                <form action="" method="POST">
                                    <input type="hidden" value="<?= $row->getItem_id(); ?>" name="item_id">
                                    <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger px-3 border-right">Add to Cart</button>
                                </form>
                            </div>
                            <!-- End Product Qty -->
                        </div>

                        <div class="col-sm-2 text-right">
                            <div class="font-size-20 text-danger font-baloo">
                                $<span class="product_price" data-id="<?= $produk->getItem_id(); ?>"><?= sprintf('%.2f', $produk->getItem_price()); ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Cart Item -->
                <?php endforeach; ?>
            </div>
        </div>
        <!-- End Shopping Cart items -->
    </div>
</section>
<!-- End Shopping Cart -->