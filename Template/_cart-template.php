<?php $subTotal = 0; ?>
<?php $sumTotal = 0; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['delete-cart-submit'])) {
        $cart->deleteCart($_POST['cart_id']);
    }
}
?>
<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- Shopping Cart items -->
        <div class="row">
            <div class="col-sm-9">
                <?php foreach ($cart->getData() as $row) : ?>
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
                                <div class="d-flex font-rale w-25">
                                    <button class="qty-up border bg-light" data-id="<?= $produk->getItem_id(); ?>"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" data-id="<?= $produk->getItem_id(); ?>" class="qty_input border px-2 w-100 bg-light text-center" disabled value="1" placeholder="1">
                                    <button class="qty-down border bg-light" data-id="<?= $produk->getItem_id(); ?>"><i class="fas fa-angle-down"></i></button>
                                </div>
                                <form action="" method="post">
                                    <input type="hidden" value="<?= $row->getCart_id(); ?>" name="cart_id">
                                    <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                </form>
                                <button type="submit" class="btn font-baloo text-danger px-3 border-right">Save for later</button>
                            </div>
                            <!-- End Product Qty -->
                        </div>

                        <div class="col-sm-2 text-right">
                            <div class="font-size-20 text-danger font-baloo">
                                $<span class="product_price"><?= sprintf('%.2f', $produk->getItem_price()); ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Cart Item -->
                <?php endforeach; ?>
            </div>
            <!-- Sub total -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?= $subTotal; ?> item)&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?= sprintf('%.2f', $sumTotal); ?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!-- End Sub total -->
        </div>
        <!-- End Shopping Cart items -->
    </div>
</section>
<!-- End Shopping Cart -->