<?php

class Screen {
	private $description;

	public function __construct(String $description) {
		$this->description = $description;
	}

	public function up() {
		echo "<p>" . $this->description . " going up</p>";
	}

	public function down() {
		echo "<p>" . $this->description . " going down</p>";
	}

	public function toString() {
		return $this->description;
	}
}
