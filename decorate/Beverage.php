<?php


abstract class Beverage
{
    protected $description = '제목없음';

    public function getDescription()
    {
        return $this->description;
    }

    public abstract function cost();
}