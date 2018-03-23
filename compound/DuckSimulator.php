<?php

require_once 'MallardDuck.php';
require_once 'RedheadDuck.php';
require_once 'DuckCall.php';
require_once 'RubberDuck.php';
require_once 'Goose.php';
require_once 'adapter/GooseAdapter.php';
require_once 'decorate/QuackCounter.php';
require_once 'composite/Flock.php';

class DuckSimulator
{
    public function simulate($duckFactory)
    {
        /** @var CountingDuckFactory $duckFactory */
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $goose = new GooseAdapter(new Goose());
        echo "<br>Duck Simulator: With Composite - Flocks<br>";

        $flockOfDucks = new Flock();

        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($goose);

        $flockOfMallards = new Flock();

        $mallardOne = $duckFactory->createMallardDuck();
        $mallardTwo = $duckFactory->createMallardDuck();
        $mallardThree = $duckFactory->createMallardDuck();
        $mallardFour = $duckFactory->createMallardDuck();

        $flockOfMallards->add($mallardOne);
        $flockOfMallards->add($mallardTwo);
        $flockOfMallards->add($mallardThree);
        $flockOfMallards->add($mallardFour);

        $flockOfDucks->add($flockOfMallards);

        echo "<br>Duck Simulator: Whole Flock Simulation<br>";
        $this->simulator($flockOfDucks);

        echo "<br>Duck Simulator: Mallard Flock Simulation<br>";
        $this->simulator($flockOfMallards);

        echo "The ducks quacked ".QuackCounter::getNumberOfQuacks()." times<br>";
    }

    /** @var Quackable $duck */
    private function simulator($duck)
    {
        $duck->quack();
    }
}
