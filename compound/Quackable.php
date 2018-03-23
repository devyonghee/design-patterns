<?php
require_once 'observer/QuackObservable.php';

interface Quackable extends QuackObservable
{
    public function quack();
}
