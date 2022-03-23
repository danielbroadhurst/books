<?php

abstract class Pizza {
	public $name;

	public $dough;
	public $sauce;
	public $veggies = array();
	public $cheese;
	public $pepperoni;
	public $clam;

	abstract function prepare();

	public function bake() {
		echo "<p>Bake for 25 minutes at 350</p>";
	}

	public function cut() {
		echo "<p>Cutting the pizza into diagonal slices</p>";
	}

	public function box() {
		echo "<p>Place pizza in official PizzaStore box</p>";
	}

	public function setName(String $name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function toString() {
		$result = "";
		$result .= "---- " . $this->name . " ----\n";
		if ($this->dough != null) {
			$result .= $this->dough->toString() . "\n";
		}
		if ($this->sauce != null) {
			$result .= $this->sauce->toString() . "\n";
		}
		if ($this->cheese != null) {
			$result .= $this->cheese->toString() . "\n";
		}
		if ($this->veggies != null) {
			for ($i = 0; $i < count($this->veggies); $i++) {
				$result .= $this->veggies[$i]->toString();
				if ($i < count($this->veggies)-1) {
					$result .= ", ";
				}
			}
			$result .= "\n";
		}
		if ($this->clam != null) {
			$result .= $this->clam->toString() . "\n";
		}
		if ($this->pepperoni != null) {
			$result .= $this->pepperoni->toString() . "\n";
		}
		return $result;
	}
}
