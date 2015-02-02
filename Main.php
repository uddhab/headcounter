<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 7:00 PM
 */

error_reporting(-1);
ini_set("display_errors", "On");

require 'vendor/autoload.php';

$generator = new ValueGenerator();
$value = $generator->generate();

//$values = array(0, "a", null, 0, 0, 0 , 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2);

$updater = new ValueUpdater();
$updater->recount($value);

$ui = new UI();
$ui->display($updater->getCurrentCount());
