<?php

require_once("./Amplifier.php");

class CdPlayer {
	private $description;
	private $currentTrack;
	protected $amplifier;
	private $title;

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

	public function eject() {
		$this->title = null;
		echo "<p>" . $this->description . " eject</p>";
	}
 
	public function playAlbum(String $title) {
		$this->title = $title;
		$this->currentTrack = 0;
		echo "<p>" . $this->description . " playing \"" . $this->title . "\"</p>";
	}

	public function playTrack(int $track) {
		if ($this->title == null) {
			echo "<p>" . $this->description . " can't play track " . $this->currentTrack . 
					", no cd inserted</p>";
		} else {
			$this->currentTrack = $track;
			echo "<p>" . $this->description . " playing track " . $this->currentTrack . "</p>";
		}
	}

	public function stop() {
		$this->currentTrack = 0;
		echo "<p>" . $this->description . " stopped</p>";
	}
 
	public function pause() {
		echo "<p>" . $this->description . " paused \"" . $this->title . "\"</p>";
	}
 
	public function toString() {
		return $this->description;
	}
}
