<?php
require_once "./Quackable.php";

class QuackCounter implements Quackable
{
    /** @var Quackable $duck */
    private $duck;
    private $observable;
    private static $numberOfQuacks;

    public function __construct($duck)
    {
        $this->duck = $duck;
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        $this->duck->quack();
        self::$numberOfQuacks++;
        $this->notifyObservers();
    }

    public static function getNumberOfQuacks()
    {
        return self::$numberOfQuacks;
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
