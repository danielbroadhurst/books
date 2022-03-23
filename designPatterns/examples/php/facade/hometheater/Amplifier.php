<?php

require_once("./Tuner.php");
require_once("./StreamingPlayer.php");

class Amplifier {
	private $description;
	protected $tuner;
	private $player;
	
	public function __construct(String $description) {
		$this->description = $description;
	}
	
	public function on() {
		echo "<p>" . $this->description . " on</p>";
	}
 
	public function off() {
		echo "<p>" . $this->description . " off</p>";
	}
 
	public function setStereoSound() {
		echo "<p>" . $this->description . " stereo mode on</p>";
	}
 
	public function setSurroundSound() {
		echo "<p>" . $this->description . " surround sound on (5 speakers, 1 subwoofer)</p>";
	}
 
	public function setVolume(int $level) {
		echo "<p>" . $this->description . " setting volume to " . $level . "</p>";
	}

	public function setTuner(Tuner $tuner) {
		echo "<p>" . $this->description . " setting tuner to " . $this->player . "</p>";
		$this->tuner = $tuner;
	}
  
	public function setStreamingPlayer(StreamingPlayer $player) {
		echo "<p>" . $this->description . " setting Streaming player to " . $this->player . "</p>";
		$this->player = $player;
	}
 
	public function toString() {
		return $this->description;
	}
}
