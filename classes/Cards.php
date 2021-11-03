<?php

require_once __DIR__ . "/classes/Card.php";

class Cards
{
    private $cards, $id;

    function __construct()
    {
        $this->cards = [];
        $this->id = 0;
    }

    function addCard(Card $_card)
    {
        $this->cards[] = [
            "id" => $this->id,
            "owner" => $_card->getOwner(),
            "code" => $_card->getCode(),
            "cvv" => $_card->getCvv()
        ];
        $this->id++;
    }

    function removeCard($_id)
    {
        if (!is_numeric($_id) || !is_int($_id)) throw new Exception("_id myst be a integer number");
        // TODO Rimuovere carta dall'account
    }
}
