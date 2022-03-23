<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./SimpleRemoteControl.php');
require_once('./Light.php');
require_once('./GarageDoor.php');
require_once('./LightOnCommand.php');
require_once('./LightOffCommand.php');
require_once('./GarageDoorOpenCommand.php');

class RemoteControlTest {
	public static function main() {
		$remote = new SimpleRemoteControl();
		$light = new Light();
		$garageDoor = new GarageDoor();
		$lightOn = new LightOnCommand($light);
		$lightOff = new LightOffCommand($light);
		$garageOpen = 
		    new GarageDoorOpenCommand($garageDoor);
 
		$remote->setCommand($lightOn);
		$remote->buttonWasPressed();
		$remote->setCommand($garageOpen);
		$remote->buttonWasPressed();
		$remote->setCommand($lightOff);
		$remote->buttonWasPressed();
    }	
}

$example = new RemoteControlTest();
$example->main();
