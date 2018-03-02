<?php
require_once 'FlyBehavior.php';

abstract class CanFly implements FlyBehavior
{
    public function fly()
    {
        echo '날 수 있어요';
    }

    public function land()
    {
        echo '착지도 할 수 있어요';
    }

}