<?php
require_once 'Observer.php';
require_once 'DisplayElement.php';

class CurrentConditionsDisplay implements DisplayElement, Observer
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function CurrentConditionsDisplay($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: ".$this->temperature."F degrees and ".$this->humidity."% humidity";
    }
}