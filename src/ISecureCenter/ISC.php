<?php

namespace Hillpy\HikSDK\ISecureCenter;

use Hillpy\HikSDK\CacheKey;
use Hillpy\HikSDK\ISecureCenter\Interfaces\AuthInterface;
use Hillpy\HikSDK\ISecureCenter\Interfaces\FaceInterface;
use Hillpy\HikSDK\ISecureCenter\Interfaces\OrgInterface;
use Hillpy\HikSDK\ISecureCenter\Interfaces\PersonInterface;
use Hillpy\HikSDK\ISecureCenter\Traits\AuthTrait;
use Hillpy\HikSDK\ISecureCenter\Traits\FaceTrait;
use Hillpy\HikSDK\ISecureCenter\Traits\OrgTrait;
use Hillpy\HikSDK\ISecureCenter\Traits\PersonTrait;
use Hillpy\HikSDK\Libraries\Cache\Cache;
use Hillpy\HikSDK\Libraries\Common\Common;

class ISC implements
    AuthInterface,
    FaceInterface,
    OrgInterface,
    PersonInterface
{
    use AuthTrait,
        FaceTrait,
        OrgTrait,
        PersonTrait;

    // ISC实例
    private static $instance;

    // 配置选项
    private $options = [
        'host' => '',
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
        $this->cacheKeyPrefix = Common::parseStr(CacheKey::$prefix, ['platform' => 'isc', 'app_key' => $this->options['app_key']]);
        // 获取accessToken
        $this->token = $this->getAccessTokenWithCache();
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

    public function setToken($token = '')
    {
        $this->token = $token;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getAccessTokenWithCache()
    {
        // 计算缓存名
        $accessTokenCacheKey = $this->parseCacheKey(CacheKey::$accessToken, ['app_key' => $this->options['app_key']]);
        // 从缓存获取accessToken
        $accessToken = $this->cache->get($accessTokenCacheKey);
        // 若过期，则重新请求获取
        if (!$accessToken) {
            $res = $this->getAccessToken([]);
            if (
                isset($res['code']) &&
                $res['code'] == 0
            ) {
                $accessToken = isset($res['data']['access_token']) ? $res['data']['access_token'] : '';
                $tokenType = isset($res['data']['token_type']) ? $res['data']['token_type'] : '';
                $expiresIn = isset($res['data']['expires_in']) ? $res['data']['expires_in'] : '';
                // 缓存token
                $this->cache->set($accessTokenCacheKey, $accessToken, $expiresIn - 5);
            }
        }

        return $accessToken;
    }
}
