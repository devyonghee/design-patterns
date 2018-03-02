<?php
require_once 'Beverage.php';

class HouseBlend extends Beverage
{
    public function HouseBlend()
    {
        $this->description = '하우스 블렌드 커피';
    }

    public  function cost()
    {
        return 0.89;
    }
}