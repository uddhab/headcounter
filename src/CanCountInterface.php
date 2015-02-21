<?php

interface CanCountInterface
{
    /*
     * Operate on current count according to the difference
     */
    public function recount($difference);
}
