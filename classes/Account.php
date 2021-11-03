<?php

require_once __DIR__ . "/classes/Cart.php";

class Account
{
    protected $username, $email, $cart, $addresses, $cards;

    function __construct($_username, $_email, Cart $_cart, $_addresses, $_cards)
    {
        $this->username = $_username;
        $this->email = $_email;
        $this->cart = $_cart;
        $this->addresses = $_addresses;
        $this->cards = $_cards;
    }

    function setUsername($_username)
    {
        $this->username = $_username;
    }

    function getUsername()
    {
        return $this->username;
    }

    function setEmail($_email)
    {
        $this->email = $_email;
    }

    function getEmail()
    {
        return $this->email;
    }
}
