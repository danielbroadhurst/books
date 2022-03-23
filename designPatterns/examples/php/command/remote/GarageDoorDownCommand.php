<?php

require_once('./Command.php');
require_once('./GarageDoor.php');

class GarageDoorDownCommand implements Command {
	private $garageDoor;

	public function __construct(GarageDoor $garageDoor) {
		$this->garageDoor = $garageDoor;
	}
	public function execute() {
		$this->garageDoor->down();
	}
}