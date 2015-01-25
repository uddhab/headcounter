<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 10:00 PM
 */

class MainCountNotifierTest  extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider triggerReturnValueProvider
     */
    public function testUpdateCount($trigger_return_value, $expected)
    {
        $this->assertEquals($expected, 1);
    }

    public function triggerReturnValueProvider()
    {
        return array(
            array(1, 1)
        );
    }
}
