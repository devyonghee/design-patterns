<?php
require_once 'RemoteControl.php';
require_once 'LightOffCommand.php';
require_once 'LightOnCommand.php';
require_once 'CeilingFan.php';
require_once 'Light.php';
require_once 'CeilingFanOn.php';
require_once 'CeilingFanOff.php';
require_once 'MacroCommand.php';


echo "커맨드 패턴<br>";
echo "커맨드 패턴을 이용하면 요구 사항을 객체로 캡슐화 할 수 있으며, 매개변수를 써서 여러가지 다른 요구 사항을 집어넣을 수도 있습니다. 또한 요청 내역을 큐에 저장하거나 로그로 기록할 수도 있으며, 작업취소 기능도 지원 가능합니다.";


$remoteControl = new RemoteControl();
$light = new Light();
$lightOffCommand = new LightOffCommand($light);
$lightOnCommand = new LightOnCommand($light);
$ceilingFan = new CeilingFan();
$ceilingFanOn = new CeilingFanOn($ceilingFan);
$ceilingFanOff = new CeilingFanOff($ceilingFan);
$partyOn = [$lightOnCommand, $ceilingFanOn];
$partyOff = [$lightOffCommand, $ceilingFanOff];
$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);

$remoteControl->setCommand(0, $lightOnCommand, $lightOffCommand);
$remoteControl->setCommand(1, $ceilingFanOn, $ceilingFanOff);

echo '<br>';
$partyOnMacro->execute();
$partyOffMacro->execute();
$partyOffMacro->undo();
echo '<br>';
echo '<br>';
$remoteControl->offButtonWasPushed(0);
$remoteControl->onButtonWasPushed(1);
$remoteControl->undoButtonWasPushed();
$remoteControl->undoButtonWasPushed();


