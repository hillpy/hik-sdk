<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter\Auth;

use Hillpy\HikSDK\Tests\ISecureCenter\BaseTrait;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    use BaseTrait;

    public function testGetAccessTokenWithCache()
    {
        $ISC = $this->getISCInstance();
        echo PHP_EOL;
        var_dump($ISC->getToken());
    }
}
