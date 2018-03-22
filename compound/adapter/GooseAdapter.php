<?php
require_once "../Quackable.php";

class GooseAdapter implements Quackable
{
    private $goose;

    public function GooseAdapter($goose)
    {
        /** @var Goose $goose */
        $this->goose = $goose;
    }

    public function quack()
    {
        $this->goose->honk();
    }
}