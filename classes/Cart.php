<?php

require_once __DIR__ . "/classes/Product.php";

class Cart
{
    private $products, $id;

    function __construct()
    {
        $this->products = [];
        $this->id = 0;
    }

    function addProduct(Product $_product)
    {
        $this->products[] = [
            "id" => $this->id,
            "name" => $_product->getName(),
            "description" => $_product->getDescription(),
            "price" => $_product->getPrice()
        ];
        $this->id++;
    }

    function removeProduct($_id)
    {
        if (!is_numeric($_id) || !is_int($_id)) throw new Exception("_id myst be a integer number");
        // TODO Rimuovere articolo dal carrello
    }
}
