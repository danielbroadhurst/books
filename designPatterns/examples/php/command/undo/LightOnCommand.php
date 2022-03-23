<?php

require_once("./Command.php");
require_once("./Light.php");

class LightOnCommand implements Command {
	private $light;
	protected $prevLevel;
  
	public function __construct(Light $light) {
		$this->light = $light;
	}
 
	public function execute() {
		$this->prevLevel = $this->light->getLevel();
		$this->light->on();
	}
 
	public function undo() {
		$this->light->dim($this->prevLevel);
	}
}
