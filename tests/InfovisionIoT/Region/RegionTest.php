<?php

namespace Hillpy\HikSDK\Tests\InfovisionIoT\Region;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class RegionTest extends TestCase
{
    use BaseTrait;

    public function testGetAllTreeCode()
    {
        $IIOT = $this->getIIOTInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($IIOT->getAllTreeCode($paramArr));
    }
}
