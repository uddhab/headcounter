<?php

class ValueUpdaterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function testIfCountIsCorrect($value, $expected)
    {
        $value_updater = new ValueUpdater();

        $value_updater->recount($value);

        $count = $value_updater->getCurrentCount();

        $this->assertSame(
            $expected,
            $count,
            "Counter is not displaying original value."
        );
    }

    public function valueProvider()
    {
        return array(
            array(null, 0),
            array(1, 0),
            array(0, 1)
        );
    }
}
