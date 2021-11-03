<?php

class Purse
{
    private $credit;

    function __construct()
    {
        $this->credit = 0;
    }

    function addCredit($_credit)
    {
        if (!is_numeric($_credit)) throw new Exception("_credit must be a number.");
        $this->credit += $_credit;
    }

    function removeCredit($_credit)
    {
        if (!is_numeric($_credit)) throw new Exception("_credit must be a number.");
        $this->credit -= $_credit;
    }

    function getCredit()
    {
        return $this->credit;
    }
}
