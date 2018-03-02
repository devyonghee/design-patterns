<?php
require_once 'Subject.php';


class WeatherData implements Subject
{
    private $observer;
    private $temperature;
    private $humidity;
    private $pressure;

    public function WeatherData()
    {
        $this->observer = array();
    }

    public function registerObserver($observer)
    {
        array_push($this->observer, $observer);
    }

    public function removeObserver($observer)
    {
        $i = array_search($observer, $this->observer);

        if ($i >= 0)
            unset($this->observer[$i]);

        sort($this->observer);
    }

    public function notifyObservers()
    {
        foreach ($this->observer as $o) {
            $o->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChaneged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChaneged();
    }
}