<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Camera;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class CameraTest extends TestCase
{
    use BaseTrait;

    public function testGetCameraPreviewURLs()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->getCameraPreviewURLs($paramArr));
    }
}
