<?php

namespace Hillpy\HikSDK\Tests\InfovisionIoT\Auth;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    use BaseTrait;

    public function testGetAccessTokenWithCache()
    {
        $IIOT = $this->getIIOTInstance();
        echo PHP_EOL;
        var_dump($IIOT->getToken());
    }
}
