<?php
require_once "./Quackable.php";

class GooseAdapter implements Quackable
{
    private $goose;
    private $observable;

    public function __construct($goose)
    {
        /** @var Goose $goose */
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        $this->goose->honk();
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