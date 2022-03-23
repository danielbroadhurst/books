<?php

require_once('./Subject.php');

class WeatherData implements Subject {
	private $observers;
	private $temperature;
	private $humidity;
	private $pressure;
	
	public function __construct()
  {
    $this->observers = [];
  }
	
	public function registerObserver(Observer $o) {
		array_push($this->observers, $o);
	}
	
	public function removeObserver(Observer $o) {
		array_splice($this->observers, array_search($o, $this->observers), 1);
	}
	
	public function notifyObservers() {
    foreach ($this->observers as $observer) {
      $observer->update($this->temperature, $this->humidity, $this->pressure);
   }
	}
	
	public function measurementsChanged() {
		$this->notifyObservers();
	}
	
	public function setMeasurements(float $temperature, float $humidity, float $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementsChanged();
	}

	public function getTemperature(): float {
		return $this->temperature;
	}
	
	public function getHumidity(): float {
		return $this->humidity;
	}
	
	public function getPressure(): float {
		return $this->pressure;
	}

}
