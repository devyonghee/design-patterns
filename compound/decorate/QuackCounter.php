<?php
require_once "./Quackable.php";

class QuackCounter implements Quackable
{
    /** @var Quackable $duck */
    private $duck;
    private static $numberOfQuacks;

    public function __construct($duck)
    {
        $this->duck = $duck;
    }

    public function quack()
    {
        $this->duck->quack();
        self::$numberOfQuacks++;
    }

    public static function getNumberOfQuacks()
    {
        return self::$numberOfQuacks;
    }
}
