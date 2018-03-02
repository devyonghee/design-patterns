<?php
require_once 'PizzaStore.php';
require_once 'NYStyleCheesePizza.php';

class NYPizzaStore extends PizzaStore
{
    public function createPizza($item)
    {
        if (strpos($item, 'cheese') !== false) {
            return new NYStyleCheesePizza();
        } elseif (strpos($item, 'veggie') !== false) {
            return new NYStyleVeggiePizza();
        } elseif (strpos($item, 'clam') !== false) {
            return new NYStyleClamPizza();
        } elseif (strpos($item, 'pepperoni') !== false) {
            return new NYStylePepperoniPizza();
        } else return null;
    }
}