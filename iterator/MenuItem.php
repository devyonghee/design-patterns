<?php

class MenuItem
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

    public function getVegetarian()
    {
        return $this->vegetarian;
    }

    public function getPrice()
    {
        return $this->price;
    }
}