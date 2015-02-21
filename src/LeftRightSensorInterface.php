<?php

interface LeftRightSensorInterface
{
    /*
     * Tells if in or out from the $value given
     */
    public function inOrOut($value);
}
