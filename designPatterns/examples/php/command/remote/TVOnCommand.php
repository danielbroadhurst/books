<?php

class TVOnCommand implements Command {
	private $tv;

  public function __construct(Tv $tv) {
    $this->tv = $tv;
  }

	public function execute() {
		$this->tv->on();
		$this->tv->setInputChannel();
	}

	public function undo() {
		$this->tv->off();
	}
}
