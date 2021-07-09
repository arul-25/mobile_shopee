<?php
// include header
include("header.php");

/* Banner Area */
include("Template/_banner-area.php");
?>



<!-- Top Sale -->
<section id="top-sale">
  <div class="container py-5">
    <h4 class="font-rubik font-size-20">Top Sale</h4>
    <hr>
    <!-- Owl Carousel -->
    <div class="owl-carousel owl-theme">
      <div class="item py-2">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung Galaxy 10</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/2.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Readme Note 7</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/6.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung A7</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Readme Note 6</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/12.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung Touch A++</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/6.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung A7</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Owl Carousel -->
  </div>
</section>
<!-- End Top Sale -->

<!-- Special Price -->
<section id="special-price">
  <div class="container">
    <h4 class="font-rubik font-size-20">Special Price</h4>
    <div id="filters" class="button-group text-right font-baloo font-size-16">
      <button class="btn is-checked" data-filter="*">All Brands</button>
      <button class="btn" data-filter=".Apple">Apple</button>
      <button class="btn" data-filter=".Samsung">Samsung</button>
      <button class="btn" data-filter=".Readme">Readme</button>
    </div>

    <div class="grid">
      <div class="grid-item Samsung border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/13.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Samsung Galaxy 10</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Apple border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/11.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Apple Iphone 10</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Readme border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Readme Note 7</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Apple border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/14.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Apple Iphone 6</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Samsung border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/12.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Samsung Note A7</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Apple border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/11.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Apple Iphone 10</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Apple border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/14.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Apple Iphone 6</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Samsung border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/13.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Samsung Galaxy 10</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Readme border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Readme Note 7</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item Apple border">
        <div class="item py-2" style="width: 200px;">
          <div class="product font-rale">
            <a href="#"><img src="./assets/products/14.png" alt="product1" class="img-fluid"></a>
            <div class="text-center">
              <h6>Apple Iphone 6</h6>
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$152</span>
              </div>
              <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end Special Price -->

<!-- Banner Ads -->
<section id="banner_adds">
  <div class="container py-5 text-center">
    <img src="./assets/banner1-cr-500x150.jpg" class="img-fluid" alt="">
    <img src="./assets/banner2-cr-500x150.jpg" class="img-fluid" alt="">
  </div>
</section>
<!-- End Banner Ads -->

<!-- New Phones -->
<section id="new-phones">
  <div class="container">
    <h4 class="font-rubik font-size-20">New Phones</h4>
    <hr>
    <!-- Owl Carousel -->
    <div class="owl-carousel owl-theme">
      <div class="item py-2 bg-light">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung Galaxy 10</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 bg-light">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/2.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Readme Note 7</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 bg-light">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/6.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung A7</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 bg-light">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Readme Note 6</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 bg-light">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/12.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung Touch A++</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 bg-light">
        <div class="product font-rale">
          <a href="#"><img src="./assets/products/6.png" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Samsung A7</h6>
            <div class="rating text-warning font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$152</span>
            </div>
            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Owl Carousel -->
  </div>
</section>
<!-- End New Phones -->

<!-- Blogs -->
<section id="blogs">
  <div class="container py-4">
    <h4 class="font-rubik font-size-20">Lates Blogs</h4>
    <hr>

    <div class="owl-carousel owl-theme">
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
          <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
          <img src="./assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla odit animi, natus molestias excepturi vero eligendi? Non enim placeat rerum!</p>
          <a href="#" class="color-second text-left">Go somewhere</a>
        </div>
      </div>
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
          <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
          <img src="./assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla odit animi, natus molestias excepturi vero eligendi? Non enim placeat rerum!</p>
          <a href="#" class="color-second text-left">Go somewhere</a>
        </div>
      </div>
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
          <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
          <img src="./assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla odit animi, natus molestias excepturi vero eligendi? Non enim placeat rerum!</p>
          <a href="#" class="color-second text-left">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end Blogs  -->

<?php
// include footer
include("footer.php");
?>