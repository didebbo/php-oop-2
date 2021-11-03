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
        $this->setUsername($_username);
        $this->setEmail($_email);
        $this->setCards($_cards);
        $this->setPurse($_purse);
        $this->setStore($_store);
    }

    function setPurse($_purse)
    {
        $this->purse = $_purse;
    }

    function setStore($_store)
    {
        $this->store = $_store;
    }
}
