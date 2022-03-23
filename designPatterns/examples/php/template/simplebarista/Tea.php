<?php

class Tea {
 
	function prepareRecipe() {
		$this->boilWater();
		$this->steepTeaBag();
		$this->pourInCup();
		$this->addLemon();
	}
 
	public function boilWater() {
		echo "<p>Boiling water</p>";
	}
 
	public function steepTeaBag() {
		echo "<p>Steeping the tea</p>";
	}
 
	public function addLemon() {
		echo "<p>Adding Lemon</p>";
	}
 
	public function pourInCup() {
		echo "<p>Pouring into cup</p>";
	}
}
