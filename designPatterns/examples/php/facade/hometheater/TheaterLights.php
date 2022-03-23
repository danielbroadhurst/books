<?php

class TheaterLights {
	private $description;

	public function __construct(String $description = null) {
		$this->description = $description;
	}

	public function on() {
		echo "<p>" . $this->description . " on</p>";
	}

	public function off() {
		echo "<p>" . $this->description . " off</p>";
	}

	public function dim(int $level) {
		echo "<p>" . $this->description . " dimming to " . $level  . "</p>";
	}

	public function toString() {
		return $this->description;
	}
}
