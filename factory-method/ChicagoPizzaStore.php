<?php
require_once 'PizzaStore.php';
require_once 'ChicagoStyleCheesePizza.php';

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($item)
    {
        if (strpos($item, 'cheese') !== false) {
            return new ChicagoStyleCheesePizza();
        } elseif (strpos($item, 'veggie') !== false) {
            return new ChicagoStyleVeggiePizza();
        } elseif (strpos($item, 'clam') !== false) {
            return new ChicagoStyleClamPizza();
        } elseif (strpos($item, 'pepperoni') !== false) {
            return new ChicagoStylePepperoniPizza();
        } else return null;
    }
}