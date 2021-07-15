<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>

        <!-- Shopping Cart items -->
        <div class="row">
            <div class="col-sm-9">
                <!-- Empty Cart -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assets/blog/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                        <p class="font-baloo font-size-16 text-black-50">Empty Wishlist</p>
                    </div>
                </div>
                <!-- End Empty Cart -->
            </div>
            <!-- Sub total -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( 0 item)&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?= sprintf('%.2f', 0); ?></span></span></h5>
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