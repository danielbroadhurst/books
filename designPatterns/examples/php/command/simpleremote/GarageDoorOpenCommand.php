<?php

require_once('./Command.php');
require_once('./GarageDoor.php');

class GarageDoorOpenCommand implements Command {
	private $garageDoor;

	public function __construct(GarageDoor $garageDoor) {
		$this->garageDoor = $garageDoor;
	}

	public function execute() {
		$this->garageDoor->up();
	}
}
