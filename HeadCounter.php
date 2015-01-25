<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 7:12 PM
 */

class HeadCounter
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
    public function trigger()
    {
        return mt_rand(0, 1);
    }
}
