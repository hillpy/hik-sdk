<?php

namespace Hillpy\HikSDK\Tests\InfovisionIoT\Resource;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    use BaseTrait;

    public function testGetCameras()
    {
        $IIOT = $this->getIIOTInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($IIOT->getCameras($paramArr));
    }
}
