<?php



class CoffeeWithHook extends CaffeineBeverageWithHook {
 
	public function brew() {
		echo "<p>Dripping Coffee through filter</p>";
	}
 
	public function addCondiments() {
		echo "<p>Adding Sugar and Milk</p>";
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

		$question = "Would you like milk and sugar with your coffee (y/n)?\n";
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
