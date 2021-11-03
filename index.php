<?php

require_once __DIR__ . "/classes/Account.php";
require_once __DIR__ . "/classes/Merchant.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Cart.php";
require_once __DIR__ . "/classes/Cards.php";
require_once __DIR__ . "/classes/Card.php";

$seller = new Merchant("BestSeller", "bestseller@gmail.com");
$seller_cards = new Cards();
$cards = [
    new Card("Bestseller S.R.L.", 1234567890123456, 123),
    new Card("Bestseller 2 S.R.L.", 6543210987654321, 321)
];
foreach ($cards as $card) $seller_cards->addCard($card);

$seller->setCards($seller_cards);



var_dump($seller);
