<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./WeatherData.php');
require_once('./CurrentConditionsDisplay.php');
require_once('./StatisticsDisplay.php');
require_once('./ForecastDisplay.php');

class WeatherStation {

	public function main() {
		$weatherData = new WeatherData();
	
		$currentDisplay = 
			new CurrentConditionsDisplay($weatherData);
		$statisticsDisplay = new StatisticsDisplay($weatherData);
		$forecastDisplay = new ForecastDisplay($weatherData);

		$weatherData->setMeasurements(80, 65, 30.4);
		$weatherData->setMeasurements(82, 70, 29.2);
		$weatherData->setMeasurements(78, 90, 29.2);
		
		$weatherData->removeObserver($forecastDisplay);
		$weatherData->setMeasurements(62, 90, 28.1);
	}
}


$example = new WeatherStation();
$example->main();
