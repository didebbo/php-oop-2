<?php

class Card
{
    private $owner, $code, $cvv;

    function __construct($_owner, $_code, $_cvv)
    {
        $this->setOwner($_owner);
        $this->setCode($_code);
        $this->setCvv($_cvv);
    }

    function setOwner($_owner)
    {
        $this->owner = $_owner;
    }

    function getOwner()
    {
        return $this->owner;
    }

    function setCode($_code)
    {
        if (
            !is_numeric($_code)
            || !is_int($_code)
            || !strlen((string)$_code) != 16
        ) throw new Exception("_code must be a number integer of 16 digits");
        $this->code = $_code;
    }

    function getCode()
    {
        return $this->code;
    }

    function setCvv($_cvv)
    {
        if (
            !is_numeric($_cvv)
            || !is_int($_cvv)
            || !strlen((string)$_cvv) != 3
        ) throw new Exception("_cvv must be a number integer of 3 digits");
        $this->cvv = $_cvv;
    }

    function getCvv()
    {
        return $this->cvv;
    }
}
