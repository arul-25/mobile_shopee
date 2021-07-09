<?php
// include header
include("header.php");

/* Banner Area */
include("Template/_banner-area.php");

/* Top Sale */
include("Template/_top-sale.php");

/* Special Price */
include("Template/_special-price.php");

/* Banner Adds */
include("Template/_banner-adds.php");

/* New Phones */
include("Template/_new-phones.php");
?>








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