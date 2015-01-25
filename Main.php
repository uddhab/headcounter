<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 7:00 PM
 */

error_reporting(-1);
ini_set('display_errors', 'On');

function __autoload($name) {
    if (file_exists($name . '.php')) {
        include $name . '.php';

        return true;
    }

    throw new Exception("Unable to load $name.");
}

$head_counter = new HeadCounter();

$notifier = new MainCountNotifier();
$counter = new Counter();