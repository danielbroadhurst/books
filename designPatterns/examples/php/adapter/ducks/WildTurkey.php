<?php

require_once("./Turkey.php");

class WildTurkey implements Turkey {
	public function gobble() {
		echo "<p>Gobble gobble</p>";
	}
 
	public function fly() {
		echo "<p>I'm flying a short distance</p>";
	}
}
