<?php
require_once 'QuackObservable.php';

class Observable implements QuackObservable
{
    private $observers = [];
    private $duck;

    public function __construct($duck)
    {
        $this->duck = $duck;
    }

    public function registerObserver($observer)
    {
        array_push($this->observers, $observer);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer){
            $observer->update($this->duck);
        }
    }
}
