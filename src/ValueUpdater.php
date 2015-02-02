<?php

class ValueUpdater implements ValueUpdaterInterface
{
    protected $count;

    public function recount($input_from_device)
    {
        if ($this->count === null) {
            $this->count = 0;
        }

        if ($this->count < 1  && $input_from_device == 1) {
            return false;
        }

        if ($input_from_device === 0) {
            $this->count = $this->count + 1;
        } elseif ($input_from_device == 1) {
            $this->count = $this->count - 1;
        } else {
            return false;
        }

        return true;
    }

    public function getCurrentCount()
    {
        return $this->count;
    }
}
