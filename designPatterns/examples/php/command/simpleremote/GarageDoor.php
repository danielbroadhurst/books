<?php

class GarageDoor {

	public function __construct() {}

	public function up() {
		echo "<p>Garage Door is Open</p>";
	}

	public function down() {
		echo "<p>Garage Door is Closed</p>";
	}

	public function stop() {
		echo "<p>Garage Door is Stopped</p>";
	}

	public function lightOn() {
		echo "<p>Garage light is on</p>";
	}

	public function lightOff() {
		echo "<p>Garage light is off</p>";
	}
}
