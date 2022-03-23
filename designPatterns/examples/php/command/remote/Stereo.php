<?php

class Stereo {
	private $location;

	public function __construct(String $location) {
		$this->location = $location;
	}

	public function on() {
		echo "<p>" . $this->location . " stereo is on</p>";
	}

	public function off() {
		echo "<p>" . $this->location . " stereo is off</p>";
	}

	public function setCD() {
		echo "<p>" . $this->location . " stereo is set for CD input</p>";
	}

	public function setDVD() {
		echo "<p>" . $this->location . " stereo is set for DVD input</p>";
	}

	public function setRadio() {
		echo "<p>" . $this->location . " stereo is set for Radio</p>";
	}

	public function setVolume(int $volume) {
		// code to set the volume
		// valid range: 1-11 (after all 11 is better than 10, right?)
		echo "<p>" . $this->location . " stereo volume set to " . $volume;
	}
}
