<?php

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $veggies = array();
    protected $cheese;
    protected $pepperoni;
    protected $clam;


    abstract function prepare();

    function bake()
    {
        echo "Bake for 25 minutes at 350<br>";
    }

    function cut()
    {
        echo "Cutting the pizza into diagonal slices<br>";
    }

    function box()
    {
        echo "Place pizza in official PizzaStore box<br>";
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name."<br>";
    }

    abstract public function toString();

}
