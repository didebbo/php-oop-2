<?php

class Addresses
{
    private $addresses, $id;

    function __construct()
    {
        $this->addresses = [];
        $id = 0;
    }

    function AddAddress($_address)
    {
        $this->addresses[] = [
            "id" => $this->id,
            "address" => $_address
        ];
        $this->id++;
    }

    function removeAddress($_id)
    {
        if (!is_numeric($_id) || !is_int($_id)) throw new Exception("_id myst be a integer number");
        // TODO Rimuovere carta dall'account
    }
}
