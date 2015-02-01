<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 8:54 PM
 */

class HeadCounterTest extends PHPUnit_Framework_TestCase
{
    protected $head_counter;
    protected $counter;
    protected $notifier;
    protected $ui;
    protected $tempFile;

    public function testTriggerReturnsZeroOrOne()
    {
        $result = $this->head_counter->trigger();

        if ($result == 0 or $result == 1) {
            $zeroOrOne = true;
        }

        $this->assertTrue(
            $zeroOrOne,
            "The result should be either 0 or 1"
        );
    }

    public function setUp()
    {
        $this->head_counter = new HeadCounter();

        $this->tempFile = tmpfile();
        fwrite($this->tempFile, "0");

        $this->counter = new Counter(fread($this->tempFile, 1024));

        $this->notifier = new MainCountNotifier($this->counter);

        $this->notifier->updateCount($this->head_counter->trigger());

        $this->ui = new UI($this->counter);
    }

    public function tearDown()
    {
        fclose($this->tempFile);

    }
}
