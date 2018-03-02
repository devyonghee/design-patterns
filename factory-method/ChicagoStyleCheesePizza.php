<?php
require_once 'Pizza.php';

class ChicagoStyleCheesePizza extends Pizza
{
    public function ChicagoStyleCheesePizza(){
        $this->name = "Chicago style Dip Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";

        array_push($this->toppings, 'Shredded Mozzarella Cheese');
    }

    function cut()
    {
        echo 'Cutting the pizza into square slices<br>';
    }
}
