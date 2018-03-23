<?php
require_once "AbstractDuckFactory.php";
require_once "./MallardDuck.php";
require_once "./RedheadDuck.php";
require_once "./DuckCall.php";
require_once "./RubberDuck.php";

class DuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck()
    {
        return new MallardDuck();
    }

    public function createRedheadDuck()
    {
        return new RedheadDuck();
    }

    public function createDuckCall()
    {
        return new DuckCall();
    }

    public function createRubberDuck()
    {
        return new RubberDuck();
    }
}
