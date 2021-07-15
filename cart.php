<?php

// require autoload composer
require_once __DIR__ . "/vendor/autoload.php";

// require Functio 
require __DIR__ . "/function.php";

ob_start();

/* Header */
include("header.php");

/* Include Cart Item if is not empty */
count($cart->getData()) ? include("Template/_cart-template.php") : include("Template/NotFound/_cart_not_found.php");

/* Whislist Template */
count($wishlist->getData()) ? include("Template/_whislist_template.php") : include("Template/NotFound/_wishlist_not_found.php");


/* Top Sale */
include("Template/_new-phones.php");

/* Footer */
include("footer.php");
