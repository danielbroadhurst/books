<?php

require_once('./Command.php');
require_once('./CeilingFan.php');

class CeilingFanOffCommand implements Command {
	private $ceilingFan;

	public function __construct(CeilingFan $ceilingFan) {
		$this->ceilingFan = $ceilingFan;
	}
	public function execute() {
		$this->ceilingFan->off();
	}
}
