<?php

class GeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testDisplaysZeroOrOne()
    {
        $generator = new InOutGenerator();
        $oneOrZero = false;

        $result = $generator->generate();

        if ($result >= 0 && $result < 2) {
            $oneOrZero = true;
        }

        $this->assertTrue(
            $oneOrZero,
            "Generator is not generating only 0 or 1."
        );
    }
}
