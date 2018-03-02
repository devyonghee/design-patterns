<?php
require_once 'Pizza.php';

class CheesePizza extends Pizza
{
    private $ingredientFactory;

    public function CheesePizza($ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo "Preparing  " . $this->name;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }

    public function toString()
    {
        echo "도우 : ".$this->dough->toString()."<br>";
        echo "소스 : ".$this->sauce->toString()."<br>";
        echo "치즈 : ".$this->cheese->toString()."<br>";
        echo "야채 : ";
        foreach ($this->veggies as $veggy){
            echo $veggy->toString()."\t";
        }

    }
}