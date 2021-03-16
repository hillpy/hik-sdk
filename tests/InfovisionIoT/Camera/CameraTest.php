<?php

namespace Hillpy\HikSDK\Tests\InfovisionIoT\Camera;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class CameraTest extends TestCase
{
    use BaseTrait;

    public function testGetCameraPreviewURLs()
    {
        $IIOT = $this->getIIOTInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($IIOT->getCameraPreviewURLs($paramArr));
    }
}
