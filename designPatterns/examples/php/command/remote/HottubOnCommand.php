<?php

require_once('./Command.php');
require_once('./Hottub.php');

class HottubOnCommand implements Command {
	private $hottub;

	public function __construct(Hottub $hottub) {
		$this->hottub = $hottub;
	}
	public function execute() {
		$this->hottub->on();
		$this->hottub->heat();
		$this->hottub->bubblesOn();
	}
}
