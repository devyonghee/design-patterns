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
    public function simulate($duckFactory)
    {
        /** @var abstractFactory\CountingDuckFactory $duckFactory */
        $mallardDuck = $duckFactory->createMallardDuck();
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
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
