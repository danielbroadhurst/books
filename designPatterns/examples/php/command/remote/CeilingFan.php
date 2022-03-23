<?php

class CeilingFan {
	private $level;
	const HIGH = 2;
	const MEDIUM = 1;
	const LOW = 0;
 
	private $location = "";

	public function __construct(String $location) {
		$this->location = $location;
	}
  
	public function high() {
		// turns the ceiling fan on to high
		$this->level = self::HIGH;
		echo "<p>" . $this->location . " ceiling fan is on high</p>";
 
	} 

	public function medium() {
		// turns the ceiling fan on to medium
		$this->level = self::MEDIUM;
		echo "<p>" . $this->location . " ceiling fan is on medium</p>";
	}

	public function low() {
		// turns the ceiling fan on to low
		$this->level = self::LOW;
		echo "<p>" . $this->location . " ceiling fan is on low</p>";
	}
 
	public function off() {
		// turns the ceiling fan off
		$this->level = 0;
		echo "<p>" . $this->location . " ceiling fan is off</p>";
	}
 
	public function getSpeed() {
		return $this->level;
	}
}
