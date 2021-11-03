<?php

require_once __DIR__ . "/Account.php";
require_once __DIR__ . "/Cards.php";
require_once __DIR__ . "/Purse.php";
require_once __DIR__ . "/Store.php";

class Merchant extends Account
{
    private $purse, $store;

    function __construct($_username, $_email, Cards $_cards = NULL, Purse $_purse = NULL, Store $_store = NULL)
    {
        $this->username = $_username;
        $this->email = $_email;
        $this->cards = $_cards;
        $this->purse = $_purse;
        $this->store = $_store;
    }

    function setPurse(Purse $_purse)
    {
        $this->purse = $_purse;
    }

    function getPurse()
    {
        return $this->purse;
    }

    function addCredit($_credit)
    {
        $this->purse->addCredit("100");
    }

    function removeCredit($_credit)
    {
        $this->purse->removeCredit($_credit);
    }

    function setStore(Store $_store)
    {
        $this->store = $_store;
    }

    function getStore()
    {
        return $this->store;
    }

    function addProduct(Product $_product)
    {
        $this->store->addProduct($_product);
    }

    function removeProduct(Product $_product)
    {
        $this->store->removeProduct($_product);
    }
}
