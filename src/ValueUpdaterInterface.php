<?php

interface ValueUpdaterInterface
{
    /*
     * Recount according to new input
     *
     * @input_from_device
     */
    public function recount($input_from_device);

    public function getCurrentCount();
}
