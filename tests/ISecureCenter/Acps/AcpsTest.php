<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Acps;

use Hillpy\HikSDK\Tests\ISecureCenter\BaseTrait;
use PHPUnit\Framework\TestCase;

class AcpsTest extends TestCase
{
    use BaseTrait;

    public function testAddAuthDownloadTask()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        $paramArr = [];
        var_dump($ISC->addAuthDownloadTask($paramArr));
    }
}
