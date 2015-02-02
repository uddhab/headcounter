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
/*
function __autoload($name)
{
    if (file_exists($name . ".php")) {
        include $name . ".php";

        return true;
    }

    throw new Exception("Unable to load $name.");
}
*/

$generator = new ValueGenerator();
$value = $generator->generate();

$updater = new ValueUpdater();
$updater->recount($value);

$ui = new UI();
$ui->display($updater->getCurrentCount());
