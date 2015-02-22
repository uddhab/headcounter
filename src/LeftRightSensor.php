<?php

class LeftRightSensor implements LeftRightSensorInterface
{
    const IN = 0;

    const OUT = 1;

    /**
     * @param $value IN or OUT
     * @return IN or OUT
     */
    public function inOrOut($value)
    {
        return $value;
    }
}
