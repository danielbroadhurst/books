<?php

require_once('./Command.php');
require_once('./Light.php');

class LivingroomLightOffCommand implements Command {
	private $light;
  
	public function __construct(Light $light) {
		$this->light = $light;
	}
 
	public function execute() {
		$this->light->off();
	}
}