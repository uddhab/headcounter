<?php

interface ValueUpdaterInterface
{
    public function __construct($file);

    /*
     * Recount according to new input
     *
     * @input_from_device
     */
    public function recount($input_from_device);

    /*
     * Required to count correctly as this is state based.
     */
    public function persistCount();

    public function getCurrentCount();
}
