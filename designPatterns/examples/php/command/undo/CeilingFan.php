<?php

class CeilingFan {
	const HIGH = 3;
	const MEDIUM = 2;
	const LOW = 1;
	const OFF = 0;
	private $location;
	private $speed;
 
	public function __construct(String $location) {
		$this->location = $location;
		$this->speed = self::OFF;
	}
  
	public function high() {
		$this->speed = self::HIGH;
		echo "<p>" . $this->location . " ceiling fan is on high</p>";
	} 
 
	public function medium() {
		$this->speed = self::MEDIUM;
		echo "<p>" . $this->location . " ceiling fan is on medium</p>";
	}
 
	public function low() {
		$this->speed = self::LOW;
		echo "<p>" . $this->location . " ceiling fan is on low</p>";
	}
  
	public function off() {
		$this->speed = self::OFF;
		echo "<p>" . $this->location . " ceiling fan is off</p>";
	}
  
	public function getSpeed() {
		return $this->speed;
	}
}
