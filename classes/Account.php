<?php

require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/Addresses.php";
require_once __DIR__ . "/Cards.php";

class Account
{
    protected $username, $email, $cards;
    private $cart, $addresses;

    function __construct($_username, $_email, Cart $_cart = NULL, Addresses $_addresses = NULL, Cards $_cards = NULL)
    {
        $this->setUsername($_username);
        $this->setEmail($_email);
        $this->setCart($_cart);
        $this->setAddresses($_addresses);
        $this->setCards($_cards);
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

    function setCart($_cart)
    {
        $this->cart = $_cart;
    }

    function getCart()
    {
        return $this->cart;
    }

    function setAddresses($_addresses)
    {
        $this->addresses = $_addresses;
    }

    function getAddresses()
    {
        return $this->addresses;
    }

    function setCards($_cards)
    {
        $this->cards = $_cards;
    }

    function getCards()
    {
        return $this->cards;
    }
}
