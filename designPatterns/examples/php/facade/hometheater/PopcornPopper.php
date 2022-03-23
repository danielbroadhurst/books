<?php

class PopcornPopper {
	private $description;
	
	public function __construct(String $description) {
		$this->description = $description;
	}
 
	public function on() {
		echo "<p>" . $this->description . " on</p>";
	}
 
	public function off() {
		echo "<p>" . $this->description . " off</p>";
	}

	public function pop() {
		echo "<p>" . $this->description . " popping popcorn!</p>";
	}
  
	public function toString() {
		return $this->description;
	}
}
