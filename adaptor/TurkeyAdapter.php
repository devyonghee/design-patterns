<?php
require_once 'Duck.php';

class TurkeyAdapter implements Duck
{
    private $turkey;

    function TurkeyAdapter($turkey)
    {
        $this->turkey = $turkey;
    }

    function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for ($i = 0; $i < 5; $i++)
            $this->turkey->fly();
    }
}