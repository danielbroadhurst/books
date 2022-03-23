<?php

require_once('./Command.php');
require_once('./Stereo.php');

class StereoOnCommand implements Command {
	private $stereo;
 
	public function __construct(Stereo $stereo) {
		$this->stereo = $stereo;
	}
 
	public function execute() {
		$this->stereo->on();
	}
}
