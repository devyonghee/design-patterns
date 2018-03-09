<?php

abstract class CaffeineBeverage
{
    final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract function brew();

    abstract function addCondiments();

    public function boilWater()
    {
        echo "물 끓이는 중<br>";
    }

    public function pourInCup()
    {
        echo "컵에 따르는 중<br>";
    }
}