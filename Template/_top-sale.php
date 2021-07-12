<!-- Top Sale -->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- Owl Carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($repositoryProduct->getData() as $row) : ?>
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
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- End Owl Carousel -->
    </div>
</section>
<!-- End Top Sale -->