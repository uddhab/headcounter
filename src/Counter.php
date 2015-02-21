<?php

/*
 * Adds or remove according to the value in or out
 */
abstract class Counter implements CanCountInterface
{
    protected $count = 0;

    /**
     * Retrives current count first
     */
    public function __construct()
    {
        $this->count = $this->retrieveCount();
    }

    public function getCurrentCount()
    {
        return $this->count;
    }

    /**
     * Operates on count according to the parameter $inOrOut
     *
     * @param $value in or out
     * @return mixed
     */
    abstract public function recount($inOrOut);

    /**
     * Should persiste current count value to some memory
     *
     * @return mixed
     */
    abstract protected function persistCount();

    /**
     * Should return a current count value from some memory
     *
     * @return integer
     */
    abstract protected function retrieveCount();
}
