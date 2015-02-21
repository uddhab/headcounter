<?php

class InOutGenerator implements InOutGeneratorInterface
{
    const IN = 0;

    const OUT = 1;
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
        return mt_rand(self::IN, self::OUT);
    }
}
