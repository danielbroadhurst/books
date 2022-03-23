<?php

require_once('./Command.php');
require_once('./NoCommand.php');

//
// This is the invoker
//
class RemoteControlWithUndo {
	private $onCommands = array();
	private $offCommands = array();
	private $undoCommand;
 
	public function __construct() {
		$this->onCommands = array_fill(0, 7, new NoCommand());
		$this->offCommands = array_fill(0, 7, new NoCommand());
		$this->undoCommand = new NoCommand();
	}

	public function setCommand(int $slot, Command $onCommand, Command $offCommand) {
		$this->onCommands[$slot] = $onCommand;
		$this->offCommands[$slot] = $offCommand;
	}
 
	public function onButtonWasPushed(int $slot) {
		$this->onCommands[$slot]->execute();
		$this->undoCommand = $this->onCommands[$slot];
	}
 
	public function offButtonWasPushed(int $slot) {
		$this->offCommands[$slot]->execute();
		$this->undoCommand = $this->offCommands[$slot];
	}
 
	public function undoButtonWasPushed() {
		$this->undoCommand->undo();
	}

	public function toString() {
		$stringBuff = "";
		$stringBuff .= "<p>------ Remote Control -------</p>";
		for ($i = 0; $i < count($this->onCommands); $i++) {
			$stringBuff .= "<p>[slot " . $i . "] " . get_class($this->onCommands[$i])
				. "    " . get_class($this->offCommands[$i]) . "</p>";
		}
		$stringBuff .= "[undo] " . get_class($this->undoCommand) . "</p>";
		return $stringBuff;
	}
}
