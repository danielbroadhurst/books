<?php

require_once('./Command.php');
require_once('./NoCommand.php');

class RemoteControl {
	private $onCommands = array();
	private $offCommands = array();
 
	public function __construct() {
		$this->onCommands = array_fill(0, 7, new NoCommand());
		$this->offCommands = array_fill(0, 7, new NoCommand());
	}
  
	public function setCommand(int $slot, Command $onCommand, Command $offCommand) {
		$this->onCommands[$slot] = $onCommand;
		$this->offCommands[$slot] = $offCommand;
	}
 
	public function onButtonWasPushed(int $slot) {
		$this->onCommands[$slot]->execute();
	}
 
	public function offButtonWasPushed(int $slot) {
		$this->offCommands[$slot]->execute();
	}
  
	public function toString() {
		$stringBuff = "";
		$stringBuff .= "<p>------ Remote Control -------</p>";
		for ($i = 0; $i < count($this->onCommands); $i++) {
			$stringBuff .= "<p>[slot " . $i . "] " . get_class($this->onCommands[$i])
				. "    " . get_class($this->offCommands[$i]) . "</p>";
		}
		return $stringBuff;
	}
}
