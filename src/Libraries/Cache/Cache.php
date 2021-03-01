<?php

namespace Hillpy\HikSDK\Libraries\Cache;

use Hillpy\HikSDK\Libraries\Cache\Interfaces\CacheInterface;
use Hillpy\HikSDK\Libraries\Cache\Traits\FileTrait;
use Hillpy\HikSDK\Libraries\Cache\Traits\MemcachedTrait;
use Hillpy\HikSDK\Libraries\Cache\Traits\RedisTrait;
use Hillpy\HikSDK\Libraries\Common\Common;

class Cache implements CacheInterface
{
    use FileTrait,
        MemcachedTrait,
        RedisTrait;

    // Cache类实例
    private static $instance;

    // 配置参数
    private $options = [
        'driver' => 'file',
        'prefix' => 'cache_',
        'key' => 'cache',
        'expire' => 3600,
        'file_base_path' => '',
        'file_path' => '/cache',
        'file_ext' => 'php',
        'host' => '127.0.0.1',
        'port' => '',
    ];

    /**
     * 允许使用的驱动类型
     *
     * @var array
     */
    private $allowDriver = [
        'file',
        'redis',
        'memcached',
    ];

    /**
     * 驱动trait数组
     *
     * @var array
     */
    private $driverTraitArr = [
        'file' => FileTrait::class,
        'redis' => RedisTrait::class,
        'memcached' => MemcachedTrait::class,
    ];

    // 驱动trait
    private $driver;

    /**
     * 允许传入的文件扩展
     *
     * @var array
     */
    private $allowFileExt = [
        'php',
        'json',
    ];

    /**
     * 默认缓存端口
     *
     * @var array
     */
    private $defaultPort = [
        'redis' => 6379,
        'memcached' => 11211,
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
        in_array($this->options['file_ext'], $this->allowFileExt) || $this->options['file_ext'] = 'php';
        in_array($this->options['driver'], $this->allowDriver) || $this->options['driver'] = 'file';
        $this->options['port'] || (isset($this->defaultPort[$this->options['driver']]) && $this->options['port'] = $this->defaultPort[$this->options['driver']]);

        $this->driver = $this->driverTraitArr[$this->options['driver']];
        $this->driver::init($this->options);
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

    public function set($key = '', $value = '', $expire = '')
    {
        return $this->driver::set($key, $value, $expire);
    }

    public function get($key = '')
    {
        return $this->driver::get($key);
    }

    public function delete($key = '')
    {
        return $this->driver::delete($key);
    }

    public function clear()
    {
        return $this->driver::clear();
    }
}
