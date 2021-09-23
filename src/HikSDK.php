<?php

namespace Hillpy\HikSDK;

use Hillpy\HikSDK\InfovisionIoT\IIOT;
use Hillpy\HikSDK\ISecureCenter\ISC;
use Hillpy\HikSDK\Libraries\Common\Common;

class HikSDK
{
    // HikSDK实例
    private static $instance;

    // 配置选项
    private $options = [
        'platform' => '',
        'config' => '',
    ];

    // 平台类数组
    private $platformClasses = [
        'IIOT' => IIOT::class,
        'ISC' => ISC::class,
    ];

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

        $instance = '';
        if (
            $this->$options['platform'] &&
            isset($this->platformClasses[$this->$options['platform']]) &&
            method_exists($this->platformClasses[$this->$options['platform']], 'getInstance')
        ) {
            $instance = $this->platformClasses[$this->$options['platform']]::getInstance(is_array($this->$options['config'] ? $this->$options['config'] : []));
        } else {
        }

        return $instance;
    }
}
