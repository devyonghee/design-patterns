<?php
require_once 'Duck.php';

class MallardDuck implements Duck
{
    function quack()
    {
        echo 'Quack';
    }

    function fly()
    {
        echo "I`m flying";
    }
}