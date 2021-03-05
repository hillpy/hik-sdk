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

    public static function getSignature($appKey, $appSecret, $url = '')
    {
        $signatureStr = self::getSignatureStr($appKey, $url);
        $signature = hash_hmac('sha256', $signatureStr, $appSecret, true);
        return base64_encode($signature);
    }

    public static function getSignatureStr($appKey = '', $url = '/api/v1/oauth/token')
    {
        $br = "\n";
        $httpMethod = 'POST';
        $accept = '*/*';
        $contentType = 'application/json;charset=UTF-8';
        list($msecond, $second) = explode(' ', microtime());
        $timestamp = (float)sprintf('%.0f', (floatval($msecond) + floatval($second)) * 1000);

        $signatureStr = '';
        $signatureStr .= $httpMethod . $br;
        $signatureStr .= $accept . $br;
        $signatureStr .= $contentType . $br;
        $signatureStr .= "x-ca-key:$appKey$br";
        $signatureStr .= "x-ca-timestamp:$timestamp$br";
        $signatureStr .= $url;

        return $signatureStr;
    }
}
