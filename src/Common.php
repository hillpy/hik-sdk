<?php

namespace Hillpy\HikSDK;

class Common
{
    public static function handleParam($rawData, $newData)
    {
        if (!is_array($rawData) || count($rawData) <= 0) {
            return [];
        }
        $paramArr = [];
        foreach ($rawData as $key => $value) {
            // 判断键是否为数字，数字则特殊处理
            if (
                is_int($key) &&
                is_array($newData)
            ) {
                foreach ($newData as $k => $v) {
                    is_array($v) && $paramArr[] = self::handleParam($value, $v);
                }
            } else {
                // 有传该字段
                if (isset($newData[$key])) {
                    // 该字段若为数组，则再次调用自身方法
                    if (
                        isset($value['value']) &&
                        is_array($value['value'])
                    ) {
                        $paramArr[$key] = self::handleParam($value['value'], $newData[$key]);

                    // 传入值不在枚举值中，则直接从默认值复制
                    } elseif (
                        isset($value['enum']) &&
                        is_array($value['enum']) &&
                        count($value['enum']) > 0 &&
                        !in_array($newData[$key], $value['enum'])
                    ) {
                        if (
                            isset($value['required']) &&
                            $value['required']
                        ) {
                            $paramArr[$key] = isset($value['default']) ? $value['default'] : '';
                        }
                    } else {
                        $paramArr[$key] = $newData[$key];
                    }

                    // 未传该字段情况下判断是否必填，若是，则获取默认值
                } elseif (
                    isset($value['required']) &&
                    $value['required']
                ) {
                    $paramArr[$key] = isset($value['default']) ? $value['default'] : '';
                }
            }
        }
        return $paramArr;
    }

    public static function getSignatureData($appKey, $appSecret, $url)
    {
        $signatureStrData = self::getSignatureStrData($appKey, $url);
        $signature = hash_hmac('sha256', $signatureStrData['signatureStr'], $appSecret, true);
        return array_merge($signatureStrData, ['signature' => base64_encode($signature)]);
    }

    public static $br = "\n";
    public static $httpMethod = 'POST';
    public static $accept = '*/*';
    public static $contentType = 'application/json;charset=UTF-8';

    public static function getSignatureStrData($appKey, $url)
    {
        $br = self::$br;
        $httpMethod = self::$httpMethod;
        $accept = self::$accept;
        $contentType = self::$contentType;
        list($msecond, $second) = explode(' ', microtime());
        $timestamp = (float)sprintf('%.0f', (floatval($msecond) + floatval($second)) * 1000);

        $signatureStr = '';
        $signatureStr .= $httpMethod . $br;
        $signatureStr .= $accept . $br;
        $signatureStr .= $contentType . $br;
        $signatureStr .= "x-ca-key:$appKey$br";
        $signatureStr .= "x-ca-timestamp:$timestamp$br";
        $signatureStr .= $url;

        return [
            'br' => $br,
            'httpMethod' => $httpMethod,
            'accept' => $accept,
            'contentType' => $contentType,
            'appKey' => $appKey,
            'timestamp' => $timestamp,
            'signatureStr' => $signatureStr,
        ];
    }

    public static function getCurlOptions($data)
    {
        return [
            CURLOPT_HTTPHEADER => [
                'Accept:' . (isset($data['accept']) ? $data['accept'] : ''),
                'Content-Type:' . (isset($data['contentType']) ? $data['contentType'] : ''),
                'x-Ca-Key:' . (isset($data['appKey']) ? $data['appKey'] : ''),
                'X-Ca-Signature:' . (isset($data['signature']) ? $data['signature'] : ''),
                'X-Ca-Timestamp:' . (isset($data['timestamp']) ? $data['timestamp'] : ''),
                'X-Ca-Signature-Headers:' . 'x-ca-key,x-ca-timestamp',
            ],
        ];
    }
}
