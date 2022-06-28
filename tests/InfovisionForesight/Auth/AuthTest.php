<?php

namespace Hillpy\HikSDK\Tests\InfovisionForesight\Auth;

use Hillpy\HikSDK\Tests\BaseTrait;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    use BaseTrait;

    public function testGetAccessTokenWithCache()
    {
        $IFORE = $this->getIFOREInstance();
        echo PHP_EOL;
        var_dump($IFORE->getToken());
    }
}
