<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Event;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase
{
    use BaseTrait;

    public function testSubscribeEventByEventType()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->subscribeEventByEventType($paramArr));
    }

    public function testGetSubscribeEvent()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getSubscribeEvent($paramArr));
    }

    public function testGetUnsubscribeEvent()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getUnsubscribeEvent($paramArr));
    }

    public function testSearchEvent()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->searchEvent($paramArr));
    }
}
