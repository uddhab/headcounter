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

$ui = new UI();
echo $ui->display($counter->getCurrentCount());
