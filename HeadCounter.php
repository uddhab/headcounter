<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 7:12 PM
 */

class HeadCounter {
    /*
     * Left         Right
     * .............;
     * | :          ;
     * | : ROOM     ;
     * | :          ;
     * .............;
     * @returns bool true From left to right
     *               false From right to left
     */
    public function trigger() {
        return mt_rand(0, 1);
    }
}