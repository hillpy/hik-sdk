<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Region;

use Hillpy\HikSDK\Tests\ISecureCenter\BaseTrait;
use PHPUnit\Framework\TestCase;

class RegionTest extends TestCase
{
    use BaseTrait;

    public function testGetRootRegions()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getRootRegions($paramArr));
    }

    public function testGetRegionsByParams()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getRegionsByParams($paramArr));
    }

    public function testGetSubRegions()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getSubRegions($paramArr));
    }

    public function testGetRegions()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getRegions($paramArr));
    }

    public function testGetRegionInfo()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getRegionInfo($paramArr));
    }

    public function testGetRegionByTimeRange()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getRegionByTimeRange($paramArr));
    }

    public function testAddBatchRegion()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addBatchRegion($paramArr));
    }

    public function testUpdateSingleRegion()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->updateSingleRegion($paramArr));
    }
}
