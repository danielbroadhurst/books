<?php

require_once("./Drone.php");

class SuperDrone implements Drone {
	public function beep() {
		echo "<p>Beep beep beep</p>";
	}
	public function spin_rotors() {
		echo "<p>Rotors are spinning</p>";
	}
	public function take_off() {
		echo "<p>Taking off</p>";
	}
}
