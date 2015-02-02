<?php

class UITest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function testIfDisplaysGivenValueCorrectly($value, $expected)
    {
        $ui = new UI();
        $result = $ui->display($value);
        $this->assertSame(
            $expected,
            $result,
            "Counter is not displaying original value."
        );
    }

    public function valueProvider()
    {
        return array(
            array(0, 0),
            array(1, 1),
            array(2, 2),
            array("a", "I"),
            array(1000, "L"),
            array(-1, "S"),
            array(999999999999999999999999, "L"),
        );
    }
}
