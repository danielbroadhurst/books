<?php

require_once("./Duck.php");
require_once("./Drone.php");

class DroneAdapter implements Duck {
	private $drone;
 
	public function __construct(Drone $drone) {
		$this->drone = $drone;
	}
    
	public function quack() {
		$this->drone->beep();
	}
  
	public function fly() {
		$this->drone->spin_rotors();
		$this->drone->take_off();
	}
}
