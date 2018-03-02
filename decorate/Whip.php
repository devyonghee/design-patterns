<?php
require_once 'Beverage.php';

class Whip extends Beverage
{
    private $beverage;

    public function Whip($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", 휘핑 크림";
    }

    public function cost()
    {
        return 0.1 + $this->beverage->cost();
    }
}