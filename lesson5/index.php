<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 15.09.2018
 * Time: 12:05
 */

$CPUForServer = new \models\cpu\CPUForServerComputer('Intel', 'for server', 8, 3.55, 50000);
$CPUForPersonal = new \models\cpu\CPUForPersonalComputer('Intel', 'for personal', 4, 4.00, 20000);
$MotherboardForServer = new \models\motherboard\MotherboardForServerComputer('Asus', 'for server', 10000);
$MotherboardForPersonal = new \models\motherboard\MotherboardForPersonalComputer('Asus', 'for personal', 8000);
$powerSupply = new \models\powerSupply\PowerSupply('Thermaltake', 'for computer', 900, 7500);
$RAMForServer = new \models\ram\RAMForServerComputer('Kingston', 'for server', 32, 25000);
$RAMForPersonal = new \models\ram\RAMForPersonalComputer('Kingston', 'for personal', 8, 9000);
$HDD = new \models\rom\HDD('WD', 'hdd', 2048, 10000);
$SSD = new \models\rom\SSD('Kingston', 'ssd', 120, 12000);
$videoCard = new \models\videoCard\VideoCard('Asus', 'GeForce GTX 1070', 30000);

$serverComputer = new \models\ServerComputerBuilder();
$serverComputer->setCpu($CPUForServer);
$serverComputer->setMotherboard($MotherboardForServer);
$serverComputer->setPowerSupply($powerSupply);
$serverComputer->setRam($RAMForServer);
$serverComputer->setRom($HDD);
$serverComputer->build();

$personalComputer = new \models\PersonalComputerBuilder();
$personalComputer->setCpu($CPUForPersonal);
$personalComputer->setMotherboard($MotherboardForPersonal);
$personalComputer->setPowerSupply($powerSupply);
$personalComputer->setRam($RAMForServer);
$personalComputer->setRom($HDD);
$personalComputer->build();
$personalComputer->setVideoCard($videoCard);

