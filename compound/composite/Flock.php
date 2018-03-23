<?php
require_once './Quackable.php';

class Flock implements Quackable
{
    private $quackers = [];

    public function add($quacker)
    {
        /** @var Quackable $quacker */
        array_push($this->quackers, $quacker);
    }

    public function quack()
    {
        foreach ($this->quackers as $quacker) {
            $quacker->quack();
        }
    }
}
