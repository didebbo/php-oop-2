<?php

class Product
{
    private $name, $price, $description;

    function __construct($_name, $_price, $_description = NULL)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
    }

    function setName($_name)
    {
        $this->name = $_name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPrice($_price)
    {
        if (!is_numeric($_price)) throw new Exception("product_price must be a number");
        $this->price = $_price;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setDescription($_description)
    {
        $this->description = $_description;
    }

    function getDescription()
    {
        return $this->description;
    }
}
