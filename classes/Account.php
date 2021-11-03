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

    function setCart(Cart $_cart)
    {
        $this->cart = $_cart;
    }

    function getCart()
    {
        return $this->cart;
    }

    function setAddresses(Addresses $_addresses)
    {
        $this->addresses = $_addresses;
    }

    function getAddresses()
    {
        return $this->addresses;
    }

    function setCards(Cards $_cards)
    {
        $this->cards = $_cards;
    }

    function getCards()
    {
        return $this->cards;
    }

    function addCard(Card $_card)
    {
        $this->cards->addCard($_card);
    }

    function removeCard($_id)
    {
        $this->cards->removeCard($_id);
    }
}
