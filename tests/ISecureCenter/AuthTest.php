<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter;

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    use BaseTrait;

    public function testAuth()
    {
        $ISC = $this->getISCInstance();
    }
}
