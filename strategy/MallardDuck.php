<?php
require_once 'Duck.php';
require_once 'QuackSoundOut.php';
require_once 'FlyWithWings.php';


class MallardDuck extends duck
{
    function mallardDuck()
    {
        $this->quackBehavior = new QuackSoundOut();
        $this->flyBehavior = new FlyWithWings();
    }

    function quackPerform()
    {
        $this->quackBehavior->sound();
    }

    function flyPerform()
    {
        $this->flyBehavior->fly();
    }
    function landPerform()
    {
        $this->flyBehavior->land();
    }
}