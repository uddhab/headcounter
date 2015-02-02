<?php

interface ValueGeneratorInterface
{
    /*
     * Generates the value anyhow
     *
     * @return integer value 0 or 1 NOTHING ELSE
     */
    public function generate();
}
