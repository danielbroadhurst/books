<?php

class Hottub {
	private $on;
	public $temperature;

	public function __construct() {}

	public function on() {
		$this->on = true;
	}

	public function off() {
		$this->on = false;
	}

	public function bubblesOn() {
		if ($this->on) {
			echo "<p>Hottub is bubbling!</p>";
		}
	}

	public function bubblesOff() {
		if ($this->on) {
			echo "<p>Hottub is not bubbling</p>";
		}
	}

	public function jetsOn() {
		if ($this->on) {
			echo "<p>Hottub jets are on</p>";
		}
	}

	public function jetsOff() {
		if ($this->on) {
			echo "<p>Hottub jets are off</p>";
		}
	}

	public function setTemperature(int $temperature) {
		$this->temperature = $temperature;
	}

	public function heat() {
		$this->temperature = 105;
		echo "<p>Hottub is heating to a steaming 105 degrees</p>";
	}

	public function cool() {
		$this->temperature = 98;
		echo "<p>Hottub is cooling to 98 degrees</p>";
	}

}
