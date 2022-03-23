<?php

require_once("Amplifier.php");
require_once("Tuner.php");
require_once("StreamingPlayer.php");
require_once("CdPlayer.php");
require_once("Projector.php");
require_once("TheaterLights.php");
require_once("Screen.php");
require_once("PopcornPopper.php");

class HomeTheaterFacade {
	private $amp;
	private $tuner;
	private $player;
	private $cd;
	private $projector;
	private $lights;
	private $screen;
	private $popper;
 
	public function __construct(Amplifier $amp, 
				 Tuner $tuner, 
				 StreamingPlayer $player, 
				 Projector $projector, 
				 Screen $screen,
				 TheaterLights $lights,
				 PopcornPopper $popper) {
 
		$this->amp = $amp;
		$this->tuner = $tuner;
		$this->player = $player;
		$this->projector = $projector;
		$this->screen = $screen;
		$this->lights = $lights;
		$this->popper = $popper;
	}
 
	public function watchMovie(String $movie) {
		echo "<p>Get ready to watch a movie...</p>";
		$this->popper->on();
		$this->popper->pop();
		$this->lights->dim(10);
		$this->screen->down();
		$this->projector->on();
		$this->projector->wideScreenMode();
		$this->amp->on();
		$this->amp->setStreamingPlayer($this->player);
		$this->amp->setSurroundSound();
		$this->amp->setVolume(5);
		$this->player->on();
		$this->player->playMovie($movie);
	}
 
 
	public function endMovie() {
		echo "<p>Shutting movie theater down...</p>";
		$this->popper->off();
		$this->lights->on();
		$this->screen->up();
		$this->projector->off();
		$this->amp->off();
		$this->player->stop();
		$this->player->off();
	}

	public function listenToRadio(float $frequency) {
		echo "<p>Tuning in the airwaves...</p>";
		$this->tuner->on();
		$this->tuner->setFrequency($frequency);
		$this->amp->on();
		$this->amp->setVolume(5);
		$this->amp->setTuner($this->tuner);
	}

	public function endRadio() {
		echo "<p>Shutting down the tuner...</p>";
		$this->tuner->off();
		$this->amp->off();
	}
}