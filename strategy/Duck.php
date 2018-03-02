<?php
require_once 'Animal.php';

abstract class duck implements animal
{
    protected $flyBehavior;
    protected $quackBehavior;

    public function eat()
    {
        echo '오리가 먹는다.';
    }

    public function sleep()
    {
        echo '오리가 잔다.';
    }

    public function run()
    {
        echo '오리가 달린다.';
    }

    abstract function quackPerform();

    abstract function flyPerform();


}