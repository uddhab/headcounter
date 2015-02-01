<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2015
 * Time: 10:00 PM
 */

class MainCountNotifierTest  extends PHPUnit_Framework_TestCase
{
    protected $head_counter;
    protected $counter;
    protected $notifier;
    protected $ui;
    protected $tempFile;

    public function testHasCorrectCounter()
    {
        $this->assertAttributeInstanceOf(
            'Counter',
            'counter',
            $this->notifier,
            'Counter is not correctly initialized.'
        );
    }

    /**
     * @dataProvider triggerReturnValueProvider
     */
    public function testUpdateCount($trigger_return_value, $expected)
    {
        $this->notifier->updateCount($trigger_return_value);
        $this->ui->backupCount($this->tempFile);
        $this->assertSame($this->notifier->getCounter()->getCount(), $expected);
    }

    public function triggerReturnValueProvider()
    {
        return array(
            array(0, 1),
            array(1, 0),
            array(0, 1),
            array(0, 2),
            array(0, 3),
            array(0, 4),
            array(1, 3),
            array(1, 2),
            array(0, 3)
        );
    }

    public function setUp()
    {
        $this->head_counter = new HeadCounter();

        $this->temp = tmpfile();
        fwrite($this->temp, "0");

        $this->tempFile = stream_get_meta_data($this->temp)['uri'];

        $this->counter = new Counter(file_get_contents($this->tempFile));

        $this->notifier = new MainCountNotifier($this->counter);

        $this->notifier->updateCount($this->head_counter->trigger());

        $this->ui = new UI($this->counter);
    }

    public function tearDown()
    {
        fclose($this->temp);
    }
}
