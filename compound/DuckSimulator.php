<?php
require_once 'MallardDuck.php';
require_once 'RedheadDuck.php';
require_once 'DuckCall.php';
require_once 'RubberDuck.php';
require_once 'Goose.php';
require_once 'adapter/GooseAdapter.php';

class DuckSimulator
{
    public function simulate()
    {
        $mallardDuck = new MallardDuck();
        $redheadDuck = new RedheadDuck();
        $duckCall = new DuckCall();
        $rubberDuck = new RubberDuck();
        $goose = new GooseAdapter(new Goose());

        echo "<br>Duck Simulator<br>";
        $this->simulator($mallardDuck);
        $this->simulator($redheadDuck);
        $this->simulator($duckCall);
        $this->simulator($rubberDuck);
        $this->simulator($goose);
    }

    /** @var Quackable $duck */
    private function simulator($duck)
    {
        $duck->quack();
    }
}
