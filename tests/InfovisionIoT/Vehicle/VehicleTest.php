<?php

namespace Hillpy\HikSDK\Tests\InfovisionIoT\Camera;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class VehicleTest extends TestCase
{
    use BaseTrait;

    public function testGetVehicleByAttr()
    {
        $IIOT = $this->getIIOTInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($IIOT->getVehicleByAttr($paramArr));
    }
}
