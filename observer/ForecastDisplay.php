<?php
require_once 'Observer.php';

class forecastDisplay implements DisplayElement, Observer
{
    private $pressure;
    private $weatherData;

    public function forecastDisplay($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->pressure = $pressure;
        $this->display();
    }

    public function display()
    {
        echo "\nForecast: ". $this->pressure;
    }
}