<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Face;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class FaceTest extends TestCase
{
    use BaseTrait;

    public function testAddSingleFace()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addSingleFace($paramArr));
    }

    public function testUpdateSingleFace()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->updateSingleFace($paramArr));
    }

    public function testDeleteSingleFace()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->deleteSingleFace($paramArr));
    }

    public function testCheckFacePicture()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->checkFacePicture($paramArr));
    }
}
