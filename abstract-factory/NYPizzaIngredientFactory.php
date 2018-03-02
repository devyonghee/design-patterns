<?php
require_once 'PizzaIngredientFactory.php';
require_once 'ReggianoCheese.php';
require_once 'FreshClams.php';
require_once 'ThinCrustDough.php';
require_once 'SlicedPepperoni.php';
require_once 'MarinaraSauce.php';
require_once 'Garlic.php';
require_once 'Onion.php';
require_once 'Mushroom.php';
require_once 'RedPepper.php';


class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createClam()
    {
        return new FreshClams();
    }

    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }

    public function createVeggies()
    {
        $veggies = [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
        return $veggies;
    }
}