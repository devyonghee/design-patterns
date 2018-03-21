<?php

class Waitress
{
    private $allMenus;

    public function Waitress($allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu()
    {
        $this->allMenus->prints();
    }
}
