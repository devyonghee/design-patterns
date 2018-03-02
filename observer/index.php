<?php
require_once 'WeatherData.php';
require_once 'CurrentConditionsDisplay.php';
require_once 'ForecastDisplay.php';
require_once 'StatisticsDisplay.php';

echo "옵저버 패턴<br>";
echo "한 객체의 상태가 바뀌면 그 객체에 의존하는 다른 객체들한테 연락이 가고 자동으로 내용이 갱신되는 방식으로 일대다(one-to-many) 의존성을 정의합니다.<br><br>";


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