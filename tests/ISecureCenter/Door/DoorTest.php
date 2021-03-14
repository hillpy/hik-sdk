<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Door;

use Hillpy\HikSDK\Tests\ISecureCenter\BaseTrait;
use PHPUnit\Framework\TestCase;

class DoorTest extends TestCase
{
    use BaseTrait;

    public function testGetDoorStates()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getDoorStates($paramArr));
    }
}
