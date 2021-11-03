<?php

require_once __DIR__ . "/classes/Account.php";
require_once __DIR__ . "/classes/Merchant.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Cart.php";

$seller = new Merchant("BestSeller", "bestseller@gmail.com");

var_dump($seller);
