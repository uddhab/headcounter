<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 7:11 PM
 */

class Counter
{
    protected $count;

    public function __construct($count = 0)
    {
        $this->count = $count;
    }

    public function add()
    {
        $this->count++;
    }

    public function remove()
    {
        $this->count--;
    }

    public function getCount()
    {
        return $this->count;
    }
}
