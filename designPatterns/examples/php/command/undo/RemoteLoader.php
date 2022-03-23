<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./RemoteControlWithUndo.php');
require_once('./Light.php');
require_once('./LightOnCommand.php');
require_once('./LightOffCommand.php');
require_once('./CeilingFan.php');
require_once('./CeilingFanMediumCommand.php');
require_once('./CeilingFanHighCommand.php');
require_once('./CeilingFanOffCommand.php');
require_once('./CeilingFanOffCommand.php');

class RemoteLoader {
 
	public function main() {
		$remoteControl = new RemoteControlWithUndo();
 
		$livingRoomLight = new Light("Living Room");
 
		$livingRoomLightOn = 
				new LightOnCommand($livingRoomLight);
		$livingRoomLightOff = 
				new LightOffCommand($livingRoomLight);
 
		$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
 
		$remoteControl->onButtonWasPushed(0);
		$remoteControl->offButtonWasPushed(0);
		echo $remoteControl->toString();
		$remoteControl->undoButtonWasPushed();
		$remoteControl->offButtonWasPushed(0);
		$remoteControl->onButtonWasPushed(0);
		echo $remoteControl->toString();
		$remoteControl->undoButtonWasPushed();

		$ceilingFan = new CeilingFan("Living Room");
   
		$ceilingFanMedium = 
				new CeilingFanMediumCommand($ceilingFan);
		$ceilingFanHigh = 
				new CeilingFanHighCommand($ceilingFan);
		$ceilingFanOff = 
				new CeilingFanOffCommand($ceilingFan);
  
		$remoteControl->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
		$remoteControl->setCommand(1, $ceilingFanHigh, $ceilingFanOff);
   
		$remoteControl->onButtonWasPushed(0);
		$remoteControl->offButtonWasPushed(0);
		echo $remoteControl->toString();
		$remoteControl->undoButtonWasPushed();
  
		$remoteControl->onButtonWasPushed(1);
		echo $remoteControl->toString();
		$remoteControl->undoButtonWasPushed();
	}
}

$example = new RemoteLoader();
$example->main();