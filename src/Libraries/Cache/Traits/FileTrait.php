<?php

namespace Hillpy\HikSDK\Libraries\Cache\Traits;

use Hillpy\HikSDK\Libraries\Common\Common;

trait FileTrait
{
    use CommonTrait;

    private static $fileOptions = [
        'prefix' => 'cache_',
        'key' => 'cache',
        'expire' => 3600,
        'file_base_path' => '',
        'file_path' => '/cache',
        'file_ext' => 'php',
    ];

    private static $allowExt = [
        'php',
        'json',
    ];

    private static $basePath = '';

    public static function init($options = [])
    {
        if (
            is_array($options) &&
            count($options) > 0
        ) {
            self::$fileOptions = Common::updateArrayData(self::$fileOptions, $options);
        }
        in_array(self::$fileOptions['file_ext'], self::$allowExt) || self::$fileOptions['file_ext'] = 'php';
        self::$basePath = $_SERVER['DOCUMENT_ROOT'];
        self::$basePath || self::$basePath = str_replace('\\', '/', realpath(dirname(__FILE__) . '/'));
    }

    public static function set($key = '', $value = '', $expire)
    {
        $res = false;
        if (
            !$key ||
            !$value
        ) {
            return $res;
        }

        // 完整路径
        $allPath = self::$basePath . self::$fileOptions['file_base_path'] . self::$fileOptions['file_path'];
        // 创建目录
        self::makeDir($allPath);
        // 获取文件名
        $filename = self::filename($key);
        // 获取写入内容
        $content = self::buildContent($key, $value, $expire);
        // 写入文件
        $res = self::writeFile($allPath . '/' . $filename, $content);

        return $res;
    }

    public static function get($key = '')
    {
        $value = '';
        if (!$key) {
            return $value;
        }

        // 完整路径
        $allPath = self::$basePath . self::$fileOptions['file_base_path'] . self::$fileOptions['file_path'];
        // 获取文件名
        $filename = self::filename($key);

        // php缓存文件直接引入，其它直接读取
        $content = '';
        if (self::$fileOptions['file_ext'] == 'php') {
            $content = '';
            if (file_exists($allPath . '/' . $filename)) {
                $content = include_once($allPath . '/' . $filename);
            }
        } else {
            $content = self::readFile($allPath . '/' . $filename);
        }
        $value = self::parseContent($content, $allPath . '/' . $filename);

        return $value;
    }

    public static function delete($key = '')
    {
        $res = false;
        if (!$key) {
            return $res;
        }

        // 完整路径
        $allPath = self::$basePath . self::$fileOptions['file_base_path'] . self::$fileOptions['file_path'];
        // 获取文件名
        $filename = self::filename($key);
        if (file_exists($allPath . '/' . $filename)) {
            $res = unlink($allPath . '/' . $filename);
        }

        return $res;
    }

    public static function clear()
    {
        $res = false;

        // 完整路径
        $allPath = self::$basePath . self::$fileOptions['file_base_path'] . self::$fileOptions['file_path'];
        $res = self::delDir($allPath);

        return $res;
    }

    private static function delDir($dir)
    {
        $res = false;
        if (!$dir) {
            return $res;
        }

        $dh = opendir($dir);
        while ($file = readdir($dh)) {
            if ($file != '.' && $file != '..') {
                $fullpath = $dir . '/' . $file;
                if (!is_dir($fullpath)) {
                    unlink($fullpath);
                } else {
                    self::deldir($fullpath);
                }
            }
        }
        closedir($dh);

        rmdir($dir) && $res = true;
        return $res;
    }

    private static function makeDir($path)
    {
        is_dir($path) || mkdir($path, 0777, true);
    }

    private static function filename($key)
    {
        $filename = '';
        $filename = self::generateKey(self::$fileOptions['prefix'], self::$fileOptions['key'], $key);
        $filename && $filename .= '.' . self::$fileOptions['file_ext'];
        return $filename;
    }

    private static function buildContent($key, $content, $expire)
    {
        $contentArr = [
            'key' => Common::encryptData($key, self::$fileOptions['key']),
            'content' => Common::encryptData($content, self::$fileOptions['key']),
            'expire' => ($expire || $expire === 0) ? $expire : self::$fileOptions['expire'],
            'time' => time()
        ];

        $allContent = '';
        foreach (self::$allowExt as $v) {
            if (self::$fileOptions['file_ext'] == $v && $v == 'php') {
                $allContent = '<?php' . PHP_EOL . PHP_EOL . 'return \'' . json_encode($contentArr) . '\';' . PHP_EOL;
                break;
            } elseif (self::$fileOptions['file_ext'] == $v && $v == 'json') {
                $allContent = json_encode($contentArr);
                break;
            } else {
                $allContent = json_encode($contentArr);
                break;
            }
        }

        return $allContent;
    }

    private static function parseContent($content, $filename)
    {
        $res = '';
        $contentArr = json_decode($content, true);
        if (
            !isset($contentArr['expire']) ||
            !isset($contentArr['time']) ||
            ($contentArr['expire'] > 0 && time() >= ($contentArr['expire'] + $contentArr['time']))
        ) {
            file_exists($filename) && unlink($filename);
        }

        if (
            isset($contentArr['content']) &&
            $contentArr['content']
        ) {
            $res = $contentArr['content'];
        }

        $res = Common::decryptData($res, self::$fileOptions['key']);

        return $res;
    }

    private static function writeFile($filename, $content)
    {
        return file_put_contents($filename, $content);
    }

    private static function readFile($filename)
    {
        $fileContent = '';
        file_exists($filename) && $fileContent = file_get_contents($filename);
        return $fileContent;
    }
}
