<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 7:09 PM
 */

class MainCountNotifier {
    protected $counter;

    public function __construct(Counter $counter)
    {
        $this->counter = $counter;
    }

    public function updateCount($trigger_return_value)
    {
        if ($trigger_return_value == 0) {
            $this->counter->add();

            return;
        }

        $this->counter->remove();
    }
}