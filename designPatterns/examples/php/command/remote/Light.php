<?php

class Light {
	private $location = "";

	public function __construct(String $location) {
		$this->location = $location;
	}

	public function on() {
		echo "<p>" . $this->location . " light is on</p>";
	}

	public function off() {
		echo "<p>" . $this->location . " light is off</p>";
	}
}
