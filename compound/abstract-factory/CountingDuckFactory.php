<?php

require_once "AbstractDuckFactory.php";
require_once "./MallardDuck.php";
require_once "./RedheadDuck.php";
require_once "./DuckCall.php";
require_once "./RubberDuck.php";
require_once "./decorate/QuackCounter.php";

class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck()
    {
        return new QuackCounter(new MallardDuck());
    }

    public function createRedheadDuck()
    {
        return new QuackCounter(new RedheadDuck());
    }

    public function createDuckCall()
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck()
    {
        return new QuackCounter(new RubberDuck());
    }
}
