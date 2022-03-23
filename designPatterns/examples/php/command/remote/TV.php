<?php

class TV {
	public $location;
	public $channel;

	public function __construct(String $location) {
		$this->location = $location;
	}

	public function on() {
		echo "<p>TV is on</p>";
	}

	public function off() {
		echo "<p>TV is off</p>";
	}

	public function setInputChannel() {
		$this->channel = 3;
		echo "<p>Channel is set for VCR</p>";
	}
}
