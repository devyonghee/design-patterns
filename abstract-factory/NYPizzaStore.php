<?php
require_once 'PizzaStore.php';
require_once 'CheesePizza.php';
require_once 'NYPizzaIngredientFactory.php';

class NYPizzaStore extends PizzaStore
{

    public function createPizza($item)
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        if (strpos($item, 'cheese') !== false) {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');

        } elseif (strpos($item, 'veggie') !== false) {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Viggie Pizza');

        } elseif (strpos($item, 'clam') !== false) {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');

        } elseif (strpos($item, 'pepperoni') !== false) {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');

        }

        return $pizza;
    }
}