<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./RemoteControl.php');
require_once('./Light.php');
require_once('./CeilingFan.php');
require_once('./LightOnCommand.php');
require_once('./LightOffCommand.php');
require_once('./GarageDoor.php');
require_once('./Stereo.php');
require_once('./CeilingFanOnCommand.php');
require_once('./CeilingFanOffCommand.php');
require_once('./GarageDoorUpCommand.php');
require_once('./GarageDoorDownCommand.php');
require_once('./StereoOnWithCDCommand.php');
require_once('./StereoOffCommand.php');

require_once('./StereoOnCommand.php');
require_once('./TVOnCommand.php');
require_once('./TVOffCommand.php');
require_once('./Tv.php');
require_once('./Hottub.php');
require_once('./HottubOnCommand.php');
require_once('./HottubOffCommand.php');
require_once('./MacroCommand.php');


class RemoteLoader {
 
	public static function main() {
		$remoteControl = new RemoteControl();
 
		$livingRoomLight = new Light("Living Room");
		$kitchenLight = new Light("Kitchen");
		$ceilingFan= new CeilingFan("Living Room");
		$garageDoor = new GarageDoor("Garage");
		$stereo = new Stereo("Living Room");
  
		$livingRoomLightOn = 
				new LightOnCommand($livingRoomLight);
		$livingRoomLightOff = 
				new LightOffCommand($livingRoomLight);
		$kitchenLightOn = 
				new LightOnCommand($kitchenLight);
		$kitchenLightOff = 
				new LightOffCommand($kitchenLight);
  
		$ceilingFanOn = 
				new CeilingFanOnCommand($ceilingFan);
		$ceilingFanOff = 
				new CeilingFanOffCommand($ceilingFan);
 
		$garageDoorUp =
				new GarageDoorUpCommand($garageDoor);
		$garageDoorDown =
				new GarageDoorDownCommand($garageDoor);
 
		$stereoOnWithCD =
				new StereoOnWithCDCommand($stereo);
		$stereoOff =
				new StereoOffCommand($stereo);
 
		$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
		$remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
		$remoteControl->setCommand(2, $ceilingFanOn, $ceilingFanOff);
		$remoteControl->setCommand(3, $stereoOnWithCD, $stereoOff);
  
		echo $remoteControl->toString();
 
		$remoteControl->onButtonWasPushed(0);
		$remoteControl->offButtonWasPushed(0);
		$remoteControl->onButtonWasPushed(1);
		$remoteControl->offButtonWasPushed(1);
		$remoteControl->onButtonWasPushed(2);
		$remoteControl->offButtonWasPushed(2);
		$remoteControl->onButtonWasPushed(3);
		$remoteControl->offButtonWasPushed(3);


		// Macro Commands

		$light = new Light("Living Room");
		$tv = new TV("Living Room");
		$stereo = new Stereo("Living Room");
		$hottub = new Hottub();
 
		$lightOn = new LightOnCommand($light);
		$stereoOn = new StereoOnCommand($stereo);
		$tvOn = new TVOnCommand($tv);
		$hottubOn = new HottubOnCommand($hottub);
		$lightOff = new LightOffCommand($light);
		$stereoOff = new StereoOffCommand($stereo);
		$tvOff = new TVOffCommand($tv);
		$hottubOff = new HottubOffCommand($hottub);

		$partyOn = array($lightOn, $stereoOn, $tvOn, $hottubOn);
		$partyOff = array($lightOff, $stereoOff, $tvOff, $hottubOff);
  
		$partyOnMacro = new MacroCommand($partyOn);
		$partyOffMacro = new MacroCommand($partyOff);

		$remoteControl->setCommand(4, $partyOnMacro, $partyOffMacro);

		echo $remoteControl->toString();
		echo "<p> --- Pushing Macro On---</p>";
		$remoteControl->onButtonWasPushed(4);
		echo "<p> --- Pushing Macro Off---</p>";
		$remoteControl->offButtonWasPushed(4);
	}
}

$example = new RemoteLoader();
$example->main();