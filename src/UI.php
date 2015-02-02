<?php

class UI implements UIInterface
{
    public function display($value)
    {
        $message = "I";

        if ($value > 999) {
            $message = "L";
        }

        if ($value < 0) {
            $message = "S";
        }

        if ($value < 999 && $value >= 0 && !ctype_alpha($value)) {
            $message = $value;
        }

        echo $message;

        return $message;
    }
}
