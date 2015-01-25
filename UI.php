<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 7:55 PM
 */

class UI
{
    protected $counter;

    public function __construct(Counter $counter)
    {
        $this->counter = $counter;
    }

    public function displayCount()
    {
        echo $this->counter->getCount();
    }

    public function backupCount()
    {
        file_put_contents("count", $this->counter->getCount());
    }
}
