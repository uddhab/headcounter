<?php

class PersonCounter extends Counter
{
    /*
     * File location string
     */
    protected $file = "count";

    /**
     * Operates on count according to the parameter $inOrOut
     *
     * @param $value in or out
     * @return bool Success (true)
     */
    public function recount($inOrOut)
    {
        if ($inOrOut == InOutGenerator::IN) {
            $this->count++;
        } else {
            $this->count--;
        }

        $this->persistCount();

        return $this->count;
    }

    /**
     * Should persiste current count value to some memory
     *
     * @return mixed
     */
    protected function persistCount()
    {
        if (!file_put_contents($this->file, $this->getCurrentCount())) {
            throw new Exception('Persistent unsuccessful');
        };
    }

    /**
     * Should return a current count value from some memory
     *
     * @return integer
     */
    protected function retrieveCount()
    {
        $count = 0;

        if (file_exists($this->file)) {
            $count = file_get_contents($this->file);
        }

        return $count;
    }
}
