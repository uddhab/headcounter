<?php

class ValueUpdater implements ValueUpdaterInterface
{
    protected $count;

    protected $file;

    public function __construct($file = 'count')
    {
        $this->file = $file;

        if (file_exists($file)) {
            $this->count = file_get_contents($file);
        } else {
            $this->count = 0;
        }
    }

    public function recount($input_from_device)
    {
        if (is_array($input_from_device)) {
            $this->count = 0;

            foreach ($input_from_device as $value) {
                $this->recount($value);
            }

            return true;
        }

        if ($this->count < 1  && $input_from_device == 1) {
            return false;
        }

        if ($input_from_device === null) {
            return false;
        }

        if ($input_from_device === 0) {
            $this->count = $this->count + 1;
        } elseif ($input_from_device == 1) {
            $this->count = $this->count - 1;
        } else {
            return false;
        }

        try {
            $this->persistCount();
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    public function getCurrentCount()
    {
        return $this->count;
    }

    public function persistCount()
    {
        if (!file_put_contents($this->file, $this->getCurrentCount())) {
            throw new Exception('Persistent unsuccessful');
        };
    }
}
