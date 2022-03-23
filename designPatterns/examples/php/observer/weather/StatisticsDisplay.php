<?php

class StatisticsDisplay implements Observer, DisplayElement {
	private $maxTemp = 0.0;
	private $minTemp = 200;
	private $tempSum = 0.0;
	private $numReadings;
	private $weatherData;

  public function __construct(WeatherData $weatherData) {
    $this->weatherData = $weatherData;
		$this->weatherData->registerObserver($this);
  }

	public function update() {
    $temp = $this->weatherData->getTemperature();
		$this->tempSum += $temp;
		$this->numReadings++;

		if ($temp > $this->maxTemp) {
			$this->maxTemp = $temp;
		}
 
		if ($temp < $this->minTemp) {
			$this->minTemp = $temp;
		}

		$this->display();
	}

	public function display() {
		echo "<p>Avg/Max/Min temperature = " . ($this->tempSum / $this->numReadings) . "/" . $this->maxTemp . "/" . $this->minTemp . "</p>";
	}
}
