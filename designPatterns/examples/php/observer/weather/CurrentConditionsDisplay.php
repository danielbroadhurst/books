<?php

require_once('./Observer.php');
require_once('./DisplayElement.php');

class CurrentConditionsDisplay implements Observer, DisplayElement
{
  private $temperature;
  private $humidity;
  private $weatherData;
  private $observer;

  public function __construct(WeatherData $weatherData) {
    $this->weatherData = $weatherData;
    $this->weatherData->registerObserver($this);
  }

  public function update() {
		$this->temperature = $this->weatherData->getTemperature();
		$this->humidity = $this->weatherData->getHumidity();
		$this->display();
	}

  public function display() {
		echo ("<p>Current conditions: " . $this->temperature 
			. "F degrees and " . $this->humidity . "% humidity</p>");
	}
}
