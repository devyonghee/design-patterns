<?php
require_once 'Quackable.php';

class DuckCall implements Quackable
{
    public function quack()
    {
        echo "Kwak<br>";
    }
}