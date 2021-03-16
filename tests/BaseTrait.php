<?php

namespace Hillpy\HikSDK\Tests;

use Hillpy\HikSDK\InfovisionIoT\IIOT;
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

    public function getIIOTInstance()
    {
        $options = [
            'host' => Env::$IIOT['host'],
            'app_key' => Env::$IIOT['app_key'],
            'app_secret' => Env::$IIOT['app_secret'],
            'cache_driver' => 'file',
        ];

        return IIOT::getInstance($options);
    }

    public function getCacheInstance()
    {
        $option = [
            'cache_driver' => 'file',
        ];
        return Cache::getInstance($option);
    }
}
