<?php

require_once("./Command.php");

class MacroCommand implements Command {
	private $commands = array();

	public function __construct(Array $commands) {
		$this->commands = $commands;
	}
 
	public function execute() {
		for ($i = 0; $i < count($this->commands); $i++) {
			$this->commands[$i]->execute();
		}
	}
 
    /**
     * NOTE:  these commands have to be done backwards to ensure 
     * proper undo functionality
     */
	public function undo() {
		for ($i = count($this->commands) -1; $i >= 0; $i--) {
			$this->commands[$i]->undo();
		}
	}
}

