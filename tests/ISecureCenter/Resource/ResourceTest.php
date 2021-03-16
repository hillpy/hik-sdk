<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Resource;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    use BaseTrait;

    public function testGetResourcesByParams()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getResourcesByParams($paramArr));
    }

    public function testGetSubResources()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getSubResources($paramArr));
    }

    public function testGetResources()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getResources($paramArr));
    }

    public function testGetResourcesByTimeRange()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getResourcesByTimeRange($paramArr));
    }

    public function testGetResourceInfo()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getResourceInfo($paramArr));
    }
}
