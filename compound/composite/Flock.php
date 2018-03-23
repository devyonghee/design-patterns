<?php
require_once './Quackable.php';

class Flock implements Quackable
{
    private $quackers = [];
    private $observable;


    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function add($quacker)
    {
        /** @var Quackable $quacker */
        array_push($this->quackers, $quacker);
    }

    public function quack()
    {
        foreach ($this->quackers as $quacker) {
            $quacker->quack();
            $this->notifyObservers();
        }
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
