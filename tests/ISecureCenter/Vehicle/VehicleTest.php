<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Camera;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class VehicleTest extends TestCase
{
    use BaseTrait;

    public function testAddBatchVehicle()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addBatchVehicle($paramArr));
    }
}
