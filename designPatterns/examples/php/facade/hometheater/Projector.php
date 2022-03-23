<?php

require_once("StreamingPlayer.php");

class Projector {
	private $description;
	public $player;
	
	public function __construct(String $description, StreamingPlayer $player) {
		$this->description = $description;
		$this->player = $player;
	}
 
	public function on() {
		echo "<p>" . $this->description . " on</p>";
	}
 
	public function off() {
		echo "<p>" . $this->description . " off</p>";
	}

	public function wideScreenMode() {
		echo "<p>" . $this->description . " in widescreen mode (16x9 aspect ratio)</p>";
	}

	public function tvMode() {
		echo "<p>" . $this->description . " in tv mode (4x3 aspect ratio)</p>";
	}
  
	public function toString() {
		return $this->description;
	}
}
