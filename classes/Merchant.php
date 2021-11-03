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

    function setStore(Store $_store)
    {
        $this->store = $_store;
    }
}
