<?php

namespace Hillpy\HikSDK\Tests\InfovisionForesight\Camera;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class CameraTest extends TestCase
{
    use BaseTrait;

    public function testGetCameraPreviewURLs()
    {
        $IFORE = $this->getIFOREInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($IFORE->getCameraPreviewURLs($paramArr));
    }
}
