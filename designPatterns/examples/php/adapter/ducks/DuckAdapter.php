<?php

require_once("./Duck.php");
require_once("./Turkey.php");

class DuckAdapter implements Turkey {
	protected $duck;

	public function __construct(Duck $duck) {
		$this->duck = $duck;
	}
    
	public function gobble() {
		$this->duck->quack();
	}
  
	public function fly() {
		if (rand(0, 5) == 0) {
		     $this->duck->fly();
		}
	}
}
