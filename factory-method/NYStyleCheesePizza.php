<?php
require_once 'Pizza.php';

class NYStyleCheesePizza extends Pizza
{
    public function NYStyleCheesePizza(){
        $this->name = "NY style sauce and Cheese Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";

        array_push($this->toppings, 'Grated Reggiano Cheese');
    }
}
