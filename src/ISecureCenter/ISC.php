<?php

namespace Hillpy\HikSDK\ISecureCenter;

use Hillpy\HikSDK\ISecureCenter\Interfaces\FaceInterface;
use Hillpy\HikSDK\ISecureCenter\Traits\FaceTrait;
use Hillpy\HikSDK\Libraries\Common\Common;

class ISC implements
    FaceInterface
{
    use FaceTrait;

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
