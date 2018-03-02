<?php

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    function prepare()
    {
        echo "Preparing " . $this->name . "<br>";
        echo "Tossing dough...<br>";
        echo "Adding sauce...<br>";
        echo "Adding toppings<br>";
        foreach ($this->toppings as $topping) {
            echo "    " . $topping;
        }
    }

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

    public function getName()
    {
        return $this->name;
    }

}
