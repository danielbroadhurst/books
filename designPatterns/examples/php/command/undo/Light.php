<?php

class Light {
	public $location;
	private $level;

	public function __construct(String $location) {
		$this->location = $location;
	}

	public function on() {
		$this->level = 100;
		echo "<p>Light is on</p>";
	}

	public function off() {
		$this->level = 0;
		echo "<p>Light is off</p>";
	}

	public function dim(int $level) {
		$this->level = $level;
		if ($this->level == 0) {
			$this->off();
		}
		else {
			echo "<p>Light is dimmed to " . $this->level . "%</p>";
		}
	}

	public function getLevel() {
		return $this->level;
	}
}
