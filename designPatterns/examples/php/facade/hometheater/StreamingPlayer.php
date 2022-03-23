<?php

require_once("Amplifier.php");

class StreamingPlayer {
	private $description;
	private $currentChapter;
	private $amplifier;
	private $movie;

	public function __construct(String $description, Amplifier $amplifier) {
		$this->description = $description;
		$this->amplifier = $amplifier;
	}
 
	public function on() {
		echo "<p>" . $this->description . " on</p>";
	}
 
	public function off() {
		echo "<p>" . $this->description . " off</p>";
	}
 
	public function playMovie(String $movie) {
		$this->movie = $movie;
		$this->currentChapter = 0;
		echo "<p>" . $this->description . " playing \"" . $this->movie . "\"</p>";
	}

	public function playChapter(int $chapter) {
		if ($this->movie == null) {
			echo "<p>" . $this->description . " can't play chapter " . $this->chapter . " no movie selected</p>";
		} else {
			$this->currentChapter = $chapter;
			echo "<p>" . $this->description . " playing chapter " . $this->currentChapter . " of \"" . $this->movie . "\"</p>";
		}
	}

	public function stop() {
		$this->currentChapter = 0;
		echo "<p>" . $this->description . " stopped \"" . $this->movie . "\"</p>";
	}
 
	public function pause() {
		echo "<p>" . $this->description . " paused \"" . $this->movie . "\"</p>";
	}

	public function setTwoChannelAudio() {
		echo "<p>" . $this->description . " set two channel audio</p>";
	}
 
	public function setSurroundAudio() {
		echo "<p>" . $this->description . " set surround audio</p>";
	}
 
	public function toString() {
		return $this->description;
	}
}
