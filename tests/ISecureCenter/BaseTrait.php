<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter;

use Hillpy\HikSDK\Libraries\Cache\Cache;
use Hillpy\HikSDK\ISecureCenter\ISC;

trait BaseTrait
{
    public function getISCInstance()
    {
        $options = [
            'host' => Env::$ISC['host'],
            'app_key' => Env::$ISC['app_key'],
            'app_secret' => Env::$ISC['app_secret'],
            'cache_driver' => 'redis',
        ];

        return ISC::getInstance($options);
    }

    public function getCacheInstance()
    {
        $option = [
            'cache_driver' => 'redis',
        ];
        return Cache::getInstance($option);
    }
}
