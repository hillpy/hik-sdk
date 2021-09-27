<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Park;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class ParkTest extends TestCase
{
    use BaseTrait;

    public function testGetCrossRecords()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getCrossRecords($paramArr));
    }
}
