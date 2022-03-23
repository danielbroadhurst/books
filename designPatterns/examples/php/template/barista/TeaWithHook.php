<?php

require_once('./CaffeineBeverageWithHook.php');

class TeaWithHook extends CaffeineBeverageWithHook {
 
	public function brew() {
		echo "<p>Steeping the tea</p>";
	}
 
	public function addCondiments() {
		echo "<p>Adding Lemon</p>";
	}

	public function customerWantsCondiments() {

		$answer = $this->getUserInput();

		if (substr(strtolower($answer),0, 1) === "y") {
			return true;
		} else {
			return false;
		}
	}
 
	private function getUserInput() {
		$answer = null;

		$fiveMBs = 5 * 1024 * 1024;
		$fp = fopen("php://temp/maxmemory:$fiveMBs", 'r+');

		$question = "Would you like lemon with your tea (y/n)?\n";
		fputs($fp, $question);

		try {
			rewind($fp);
			$answer = stream_get_contents($fp);
		} catch (Exception $error) {
			fputs($fp, "IO error trying to read your answer\n");
		}
		if ($answer == null) {
			return "no";
		}
		return $answer;
	}
}
