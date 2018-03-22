<?php
require_once 'Quackable.php';

class MallardDuck implements Quackable
{
    public function quack()
    {
        echo "Quack<br>";
    }
}
