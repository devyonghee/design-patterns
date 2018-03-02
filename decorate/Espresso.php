<?php
require_once 'Beverage.php';

class Espresso extends Beverage
{
    public function Espresso()
    {
        $this->description = '에스프레소';
    }

    public  function cost()
    {
        return 1.99;
    }
}