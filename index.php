<?php

require_once __DIR__ . "/classes/Account.php";
require_once __DIR__ . "/classes/Merchant.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Cart.php";
require_once __DIR__ . "/classes/Cards.php";
require_once __DIR__ . "/classes/Card.php";
require_once __DIR__ . "/classes/Purse.php";
require_once __DIR__ . "/classes/Store.php";

$cards = new Cards();
$cards->addCard(new Card("Bestseller 1 S.R.L.", 1234567890123456, 123));

$seller = new Merchant("BestSeller", "bestseller@gmail.com", $cards);


$cards = [
    new Card("Bestseller 2 S.R.L.", 6543210987654321, 321),
    new Card("Bestseller 3 S.R.L.", 1234567890123456, 123),
];
foreach ($cards as $card) $seller->addCard($card);

$seller->setPurse(new Purse());
$seller->setStore(new Store());

$seller->addCredit(100);
$seller->addProduct(new Product("Prodotto 1", 20, "Il mio primo prodotto"));


var_dump($seller);
