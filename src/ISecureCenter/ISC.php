<?php

namespace Hillpy\HikSDK\ISecureCenter;

use Hillpy\HikSDK\ISecureCenter\Interfaces\DemoInterface;
use Hillpy\HikSDK\ISecureCenter\Traits\DemoTrait;
use Hillpy\HikSDK\Libraries\Cache\Cache;
use Hillpy\HikSDK\Libraries\Common\Common;

class ISC implements
    DemoInterface
{
    use DemoTrait;

    // ISC实例
    private static $instance;

    // 配置选项
    private $options = [
        'app_key' => '',
        'app_secret' => '',
        'cache_driver' => 'file',
        'cache_prefix' => 'hik_sdk_isc_',
        'cache_key' => 'hik_sdk_isecurecenter',
        'cache_expire' => 3600 * 24 * 7,
        'cache_file_base_path' => '',
        'cache_file_path' => '/HikSDKCache/ISC',
        'cache_file_ext' => 'php',
    ];

    // 接口调用凭证
    private $token;

    // Cache类实例
    private $cache;

    // 缓存key的前缀
    private $cacheKeyPrefix;

    public static function getInstance($options = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($options);
        } else {
            self::$instance->init($options);
        }

        return self::$instance;
    }

    private function __construct($options = [])
    {
        $this->init($options);
    }

    private function __clone()
    {
    }

    private function init($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            $this->options = Common::updateArrayData($this->options, $options);
        }

        // 获取Cache类实例
        $this->cache = $this->initCache();
        // 解析缓存key的通用前缀
        $this->cacheKeyPrefix = Common::parseStr(CacheKey::$prefix, ['app_key' => $this->options['app_key']]);
    }

    private function initCache()
    {
        $cacheOption = [
            'driver' => $this->options['cache_driver'],
            'prefix' => $this->options['cache_prefix'],
            'key' => $this->options['cache_key'],
            'expire' => $this->options['cache_expire'],
            'file_base_path' => $this->options['cache_file_base_path'],
            'file_path' => $this->options['cache_file_path'],
            'file_ext' => $this->options['cache_file_ext'],
        ];
        return Cache::getInstance($cacheOption);
    }

    private function parseCacheKey($key = '', $varArr = [])
    {
        if (!$key) {
            return $this->cacheKeyPrefix . $key;
        }

        $str = Common::parseStr($key, $varArr);

        return $this->cacheKeyPrefix . $str;
    }

    public function setOptions($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            $this->options = Common::updateArrayData($this->options, $options);
        }

        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }
}
