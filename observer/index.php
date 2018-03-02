<?php
require_once 'WeatherData.php';
require_once 'CurrentConditionsDisplay.php';
require_once 'ForecastDisplay.php';
require_once 'StatisticsDisplay.php';

echo "옵저버 패턴<br><br>";


$weatherData = new WeatherData();

$CurrentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
$CurrentConditionsDisplay = new StatisticsDisplay($weatherData);
$CurrentConditionsDisplay = new ForecastDisplay($weatherData);


$weatherData->setMeasurements(80,60,30.4);
echo '<br>';
$weatherData->setMeasurements(70,50,30.6);
echo '<br>';
$weatherData->setMeasurements(70,50,30.6);
echo '<br>';
$weatherData->setMeasurements(70,50,30.6);