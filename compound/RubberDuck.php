<?php
require_once 'Quackable.php';

class RubberDuck implements Quackable
{
    public function quack()
    {
        echo "Squeak<br>";
    }
}