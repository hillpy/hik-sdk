<?php

namespace Hillpy\HikSDK\Tests\InfovisionIoT\Camera;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class FaceTest extends TestCase
{
    use BaseTrait;

    public function testGetFaceDataByAttr()
    {
        $IIOT = $this->getIIOTInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($IIOT->getFaceDataByAttr($paramArr));
    }
}
