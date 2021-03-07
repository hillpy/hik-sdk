<?php

namespace Hillpy\HikSDK\Tests\ISecureCenter;

use Hillpy\HikSDK\ISecureCenter\ISC;
use Hillpy\HikSDK\Libraries\Cache\Cache;

trait BaseTrait
{
    public function getISCInstance()
    {
        $options = [
            'host' => Env::$ISC['host'],
            'app_key' => Env::$ISC['app_key'],
            'app_secret' => Env::$ISC['app_secret'],
            'cache_driver' => 'file',
        ];

        return ISC::getInstance($options);
    }

    public function getCacheInstance()
    {
        $option = [
            'cache_driver' => 'file',
        ];
        return Cache::getInstance($option);
    }
}
