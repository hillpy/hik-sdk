<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Person;

use Hillpy\HikSDK\Tests\ISecureCenter\BaseTrait;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    use BaseTrait;

    public function testAddSinglePerson()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testAddBatchPerson()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testUpdateSinglePerson()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testDeleteBatchPerson()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testGetOrgIndexCodePersonList()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testGetPersonList()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testGetAdvancePersonList()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testGetPersonInfoByCertificateNo()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testGetPersonInfoByPersonId()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testGetPersonInfoByPhoneNo()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }

    public function testGetPersonPicture()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSinglePerson($paramArr));
    }
}
