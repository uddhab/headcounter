<?php

error_reporting(-1);
ini_set("display_errors", "On");

require 'vendor/autoload.php';

$generator = new InOutGenerator();
$inOrOut = $generator->generate();

$sensor = new LeftRightSensor();
$inOrOut = $sensor->inOrOut($inOrOut);

$counter = new PersonCounter();
$counter->recount($inOrOut);

/*
$counter->reset();
$array = array(1, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1);
$counter->recountFromArray($array);
*/

$ui = new UI();
echo $ui->display($counter->getCurrentCount());
