<?php

require_once __DIR__ . "/classes/Account.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Cart.php";

$carrello = new Cart();

$utente = new Account("Gianluca", "gianluca@gmail.com", $carrello, "address", "cards");

$cart = new Cart();

$cart->addProduct("Nome 1", 20, "Descrizione 1");
$cart->addProduct("Nome 2", 18,);
$cart->addProduct("Nome 3", "1a8", "Descrizione 3");

var_dump($cart);
