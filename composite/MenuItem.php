<?php
require_once 'MenuComponent.php';

class MenuItem extends MenuComponent
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    public function MenuItem($name, $description, $vegetarian, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function isVegetarian()
    {
        return $this->vegetarian;
    }

    public function prints()
    {
        echo "   ".$this->getName();
        if($this->isVegetarian()){
            echo "(v)";
        }
        echo ", ".$this->getPrice();
        echo "<br>  -- ".$this->getDescription()."<br>";
    }
}
