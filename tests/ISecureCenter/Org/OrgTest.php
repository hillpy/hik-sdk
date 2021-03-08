<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Person;

use Hillpy\HikSDK\Tests\ISecureCenter\BaseTrait;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    use BaseTrait;

    public function testUpdateSingleOrg()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->updateSingleOrg($paramArr));
    }

    public function testDeleteBatchOrg()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->deleteBatchOrg($paramArr));
    }

    public function testAddBatchOrg()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addBatchOrg($paramArr));
    }

    public function testGetRootOrg()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getRootOrg($paramArr));
    }

    public function testGetOrgList()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getOrgList($paramArr));
    }

    public function testGetAdvanceOrgList()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getAdvanceOrgList($paramArr));
    }

    public function testGetSubOrgListByParentOrgIndexCode()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getSubOrgListByParentOrgIndexCode($paramArr));
    }

    public function testGetOrgByTimeRange()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getOrgByTimeRange($paramArr));
    }

    public function testGetOrgInfoByOrgIndexCodes()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getOrgInfoByOrgIndexCodes($paramArr));
    }
}
