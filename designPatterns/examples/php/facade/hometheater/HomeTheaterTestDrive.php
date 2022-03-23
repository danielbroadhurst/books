<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("Amplifier.php");
require_once("Tuner.php");
require_once("StreamingPlayer.php");
require_once("CdPlayer.php");
require_once("Projector.php");
require_once("TheaterLights.php");
require_once("Screen.php");
require_once("PopcornPopper.php");
require_once("HomeTheaterFacade.php");

class HomeTheaterTestDrive {
	public static function main() {
		$amp = new Amplifier("Amplifier");
		$tuner = new Tuner("AM/FM Tuner", $amp);
		$player = new StreamingPlayer("Streaming Player", $amp);
		$cd = new CdPlayer("CD Player", $amp);
		$projector = new Projector("Projector", $player);
		$lights = new TheaterLights("Theater Ceiling Lights");
		$screen = new Screen("Theater Screen");
		$popper = new PopcornPopper("Popcorn Popper");
 
		$homeTheater = 
				new HomeTheaterFacade($amp, $tuner, $player, 
						$projector, $screen, $lights, $popper);
 
		$homeTheater->watchMovie("Raiders of the Lost Ark");
		$homeTheater->endMovie();
	}
}

$example = new HomeTheaterTestDrive();
$example->main();