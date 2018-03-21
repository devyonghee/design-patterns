<?php

abstract class MenuComponent
{
    public function add($menuComponent)
    {
        throw new Exception();
    }
    public function remove($menuComponent)
    {
        throw new Exception();
    }
    public function getChild($i)
    {
        throw new Exception();
    }
    public function getName()
    {
        throw new Exception();
    }
    public function getDescription()
    {
        throw new Exception();
    }
    public function getPrice()
    {
        throw new Exception();
    }
    public function isVegetarian()
    {
        throw new Exception();
    }
    public function prints()
    {
        throw new Exception();
    }
}
