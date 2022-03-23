<?php

require_once("Amplifier.php");

class Tuner {
	private $description;
	private $amplifier;
	private $frequency;

	public function __construct(String $description, Amplifier $amplifier) {
		$this->description = $description;
		$this->amplifier = $amplifier;
	}

	public function on() {
		echo "<p>" . $this->description . " on</p>";
	}

	public function off() {
		echo "<p>" . $this->description . " off</p>";
	}

	public function setFrequency(float $frequency) {
		echo "<p>" . $this->description . " setting frequency to " . $frequency ."</p>";
		$this->frequency = $frequency;
	}

	public function setAm() {
		echo "<p>" . $this->description . " setting AM mode</p>";
	}

	public function setFm() {
		echo "<p>" . $this->description . " setting FM mode</p>";
	}

	public function toString() {
		return $this->description;
	}
}
