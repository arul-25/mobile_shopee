<?php

// require autoload composer
require_once __DIR__ . "/vendor/autoload.php";

// require Functio 
require __DIR__ . "/function.php";

ob_start();

/* Header */
include("header.php");

/* Cart Template */
include("Template/_cart-template.php");


/* Top Sale */
include("Template/_new-phones.php");

/* Footer */
include("footer.php");
