<?php

require_once("./Command.php");
require_once("./CeilingFan.php");

class CeilingFanMediumCommand implements Command {
	private $ceilingFan;
	protected $prevSpeed;
  
	public function __construct(CeilingFan $ceilingFan) {
		$this->ceilingFan = $ceilingFan;
	}
 
	public function execute() {
		$this->prevSpeed = $this->ceilingFan->getSpeed();
		$this->ceilingFan->medium();
	}
 
	public function undo() {
		if ($this->prevSpeed == CeilingFan::HIGH) {
			$this->ceilingFan->high();
		} else if ($this->prevSpeed == CeilingFan::MEDIUM) {
			$this->ceilingFan->medium();
		} else if ($this->prevSpeed == CeilingFan::LOW) {
			$this->ceilingFan->low();
		} else if ($this->prevSpeed == CeilingFan::OFF) {
			$this->ceilingFan->off();
		}
	}
}
