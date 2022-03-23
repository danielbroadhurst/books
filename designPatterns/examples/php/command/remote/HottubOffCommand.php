<?php

require_once('./Command.php');
require_once('./Hottub.php');

class HottubOffCommand implements Command {
	private $hottub;

	public function __construct(Hottub $hottub) {
		$this->hottub = $hottub;
	}
	public function execute() {
		$this->hottub->cool();
		$this->hottub->off();
	}
}
