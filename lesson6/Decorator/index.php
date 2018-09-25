<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 25.09.2018
 * Time: 21:36
 */

$smartphone = new \models\Decorator\Smartphone('Samsung', 'Galaxy S8', 47000);
$tablet = new \models\Decorator\Tablet('Huawei', 'MediaPad M5', 28000);

$order = new \models\Decorator\OnlyGadget($smartphone);
$order->getList();
$order->getPrice();

$order = new \models\Decorator\ProtectiveGlass($order);
$order->getList();
$order->getPrice();

$order = new \models\Decorator\Headphones($order);
$order->getList();  // Здесь по задумке массив ['Смартфон' => 'Samsung Galaxy S8', 'Защитное стекло' => 'Glass',
                    // 'Наушники' => 'Headphones']
$order->getPrice(); // А здесь общая сумма.




$order2 = new \models\Decorator\OnlyGadget($tablet);
$order2->getList();
$order2->getPrice();

$order2 = new \models\Decorator\CaseForGadget($order2);
$order2->getList();
$order2->getPrice();

$order2 = new \models\Decorator\ProtectiveGlass($order2);
$order2->getList(); // А здесь  ['Планшет' => 'Huawei MediaPad M5', 'Чехол' => 'Case', Защитное стекло' => 'Glass']
$order2->getPrice();// Ну и общая цена
