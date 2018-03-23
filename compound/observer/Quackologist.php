<?php
require_once 'Observer.php';

class Quackologist implements Observer
{
    public function update($duck)
    {
        echo "Quackologist just quacked.<br>";
    }
}
