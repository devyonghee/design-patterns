<?php
require_once 'MallardDuck.php';
require_once 'RedheadDuck.php';
require_once 'DuckCall.php';
require_once 'RubberDuck.php';
require_once 'Goose.php';
require_once 'adapter/GooseAdapter.php';
require_once 'decorate/QuackCounter.php';

class DuckSimulator
{
    public function simulate()
    {
        $mallardDuck = new QuackCounter(new MallardDuck());
        $redheadDuck = new QuackCounter(new RedheadDuck());
        $duckCall = new QuackCounter(new DuckCall());
        $rubberDuck = new QuackCounter(new RubberDuck());
        $goose = new GooseAdapter(new Goose());

        echo "<br>Duck Simulator<br>";
        $this->simulator($mallardDuck);
        $this->simulator($redheadDuck);
        $this->simulator($duckCall);
        $this->simulator($rubberDuck);
        $this->simulator($goose);
        echo "The ducks quacked ".QuackCounter::getNumberOfQuacks()." times<br>";
    }

    /** @var Quackable $duck */
    private function simulator($duck)
    {
        $duck->quack();
    }
}
