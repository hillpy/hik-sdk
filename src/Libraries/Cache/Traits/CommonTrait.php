<?php

namespace Hillpy\HikSDK\Libraries\Cache\Traits;

use Hillpy\HikSDK\Libraries\Common\Common;

trait CommonTrait
{
    public static function generateKey($prefix, $secretKey, $key)
    {
        return $prefix . md5($secretKey . $key);
    }

    public static function encryptValue($value, $secretKey)
    {
        return Common::encryptData($value, $secretKey);
    }

    public static function decryptValue($value, $secretKey)
    {
        return Common::decryptData($value, $secretKey);
    }
}
