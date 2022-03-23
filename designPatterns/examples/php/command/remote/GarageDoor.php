<?php

class GarageDoor {
	private $location;

	public function __construct(String $location) {
		$this->location = $location;
	}

	public function up() {
		echo "<p>" . $this->location . " garage Door is Up</p>";
	}

	public function down() {
		echo "<p>" . $this->location . " garage Door is Down</p>";
	}

	public function stop() {
		echo "<p>" . $this->location . " garage Door is Stopped</p>";
	}

	public function lightOn() {
		echo "<p>" . $this->location . " garage light is on</p>";
	}

	public function lightOff() {
		echo "<p>" . $this->location . " garage light is off</p>";
	}
}
