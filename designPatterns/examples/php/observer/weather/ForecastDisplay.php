<?php

class ForecastDisplay implements Observer, DisplayElement {
	private $currentPressure = 29.92;
	private $lastPressure;
	private $weatherData;

  public function __construct(WeatherData $weatherData) {
    $this->weatherData = $weatherData;
		$this->weatherData->registerObserver($this);
  }

	public function update() {
		$this->lastPressure = $this->currentPressure;
    $this->currentPressure = $this->weatherData->getPressure();

		$this->display();
	}

	public function display() {
		echo("<p>Forecast: </p>");
		if ($this->currentPressure > $this->lastPressure) {
			echo ("<p>Improving weather on the way!</p>");
		} else if ($this->currentPressure == $this->lastPressure) {
			echo ("<p>More of the same</p>");
		} else if ($this->currentPressure < $this->lastPressure) {
			echo ("<p>Watch out for cooler, rainy weather</p>");
		}
	}
}
