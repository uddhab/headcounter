<?php

class ValueUpdaterTest extends PHPUnit_Framework_TestCase
{
    protected $test_file;

    /**
     * @dataProvider valueProvider
     */
    public function testIfCountIsCorrect($value, $expected)
    {
        $value_updater = new ValueUpdater($this->test_file);

        $value_updater->recount($value);

        $count = $value_updater->getCurrentCount();

        $this->assertEquals(
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
            array(0, 1),
        );
    }

    public function setUp()
    {
        $this->test_file = "Tests\\count";

        file_put_contents($this->test_file, 0);
    }

    public function tearDown()
    {
        unlink($this->test_file);
    }
}
