<?php
require_once 'Quackable.php';

class RedheadDuck implements Quackable
{
    private $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        echo "Quack<br>";
        $this->notifyObservers();
    }

    public function registerObserver($observer)
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers()
    {
        $this->observable->notifyObservers();
    }
}
