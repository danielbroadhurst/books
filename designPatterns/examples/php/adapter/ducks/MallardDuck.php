<?php

require_once("./Duck.php");

class MallardDuck implements Duck {
	public function quack() {
		echo "<p>Quack</p>";
	}
 
	public function fly() {
		echo "<p>I'm flying</p>";
	}
}
