<?php
require_once 'Observer.php';
require_once 'DisplayElement.php';

class StatisticsDisplay implements DisplayElement, Observer
{
    private $temperature;
    private $weatherData;

    public function StatisticsDisplay($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->display();
    }

    public function display()
    {
        echo "\nAVg/Max/Min temperature = ". $this->temperature;
    }
}