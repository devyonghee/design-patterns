<?php

class Singleton
{
    static $uniqueInstance;

    private function Singleton(){}

    public static function getInstance()
    {
        if (self::$uniqueInstance == null) {
            self::$uniqueInstance = new Singleton();
        }
        return self::$uniqueInstance;
    }

}