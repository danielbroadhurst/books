<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./WeatherData.php');
require_once('./CurrentConditionsDisplay.php');
require_once('./StatisticsDisplay.php');
require_once('./ForecastDisplay.php');
require_once('./HeatIndexDisplay.php');

class WeatherStationHeatIndex {

	public function main() {
		$weatherData = new WeatherData();
		$currentDisplay = new CurrentConditionsDisplay($weatherData);
		$statisticsDisplay = new StatisticsDisplay($weatherData);
		$forecastDisplay = new ForecastDisplay($weatherData);
		$heatIndexDisplay = new HeatIndexDisplay($weatherData);

		$weatherData->setMeasurements(80, 65, 30.4);
		$weatherData->setMeasurements(82, 70, 29.2);
		$weatherData->setMeasurements(78, 90, 29.2);
	}
}

$example = new WeatherStationHeatIndex();
$example->main();
