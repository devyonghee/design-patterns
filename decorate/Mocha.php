<?php
require_once 'Beverage.php';

class Mocha extends Beverage
{
    private $beverage;

    public function Mocha($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", 모카";
    }

    public function cost()
    {
        return 0.2 + $this->beverage->cost();
    }
}