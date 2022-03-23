<?php
//
// This is the invoker
//

require_once('./Command.php');

class SimpleRemoteControl {
	public $slot;
 
	public function __construct() {}
 
	public function setCommand(Command $command) {
		$this->slot = $command;
	}
 
	public function buttonWasPressed() {
		$this->slot->execute();
	}
}
