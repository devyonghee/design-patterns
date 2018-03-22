<?php
require_once 'MallardDuck.php';
require_once 'RedheadDuck.php';
require_once 'DuckCall.php';
require_once 'RubberDuck.php';

class DuckSimulator
{
    public function simulate()
    {
        $mallardDuck = new MallardDuck();
        $redheadDuck = new RedheadDuck();
        $duckCall = new DuckCall();
        $rubberDuck = new RubberDuck();

        echo "<br>Duck Simulator<br>";
        $this->simulator($mallardDuck);
        $this->simulator($redheadDuck);
        $this->simulator($duckCall);
        $this->simulator($rubberDuck);
    }

    /** @var Quackable $duck */
    private function simulator($duck)
    {
        $duck->quack();
    }
}
