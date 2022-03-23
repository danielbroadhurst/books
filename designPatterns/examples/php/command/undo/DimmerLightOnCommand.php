<?php

require_once("./Command.php");
require_once("./Light.php");

class DimmerLightOnCommand implements Command {
	private $light;
	protected $prevLevel;
  
	public function __construct(Light $light) {
		$this->light = $light;
	}
 
	public function execute() {
		$this->prevLevel = $this->light->getLevel();
		$this->light->dim(75);
	}
 
	public function undo() {
		$this->light->dim($this->prevLevel);
	}
}
