<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\Libraries\Curl\Curl;

trait BaseTrait
{
    public function handleRequest($urlPath, $finalParamArr)
    {
        $url = $this->options['host'] . $urlPath;

        if ($this->token) {
            $curlOptions = [
                CURLOPT_HTTPHEADER => [
                    'Accept:' . Common::$accept,
                    'Content-Type:' . Common::$contentType,
                    'access_token:' . $this->token,
                ],
            ];
        } else {
            $signatureData = Common::getSignatureData($this->options['app_key'], $this->options['app_secret'], $urlPath);
            $curlOptions = Common::getCurlOptions($signatureData);
        }

        return json_decode(Curl::httpRequest(Common::$httpMethod, $url, $finalParamArr, $curlOptions), true);
    }
}
