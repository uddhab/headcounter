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

$updater = new ValueUpdater();
$updater->recount($value);

$ui = new UI();
$ui->display($updater->getCurrentCount());
