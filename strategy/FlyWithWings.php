<?php
require_once 'FlyBehavior.php';
require_once 'CanFly.php';

class FlyWithWings extends CanFly
{
    public function fly()
    {
        echo '날개를 가지고 날고 있어요';
    }
}