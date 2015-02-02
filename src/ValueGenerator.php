<?php

class ValueGenerator implements ValueGeneratorInterface
{
    /*
     * Left         Right
     * .............;
     * | :          ;
     * | : ROOM     ;
     * | :          ;
     * .............;
     * @returns int 0 From left to right
     *               1 From right to left
     */
    public function generate()
    {
        return mt_rand(0, 1);
    }
}
