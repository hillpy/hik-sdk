<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\AuthConstant;
use Hillpy\HikSDK\ISecureCenter\Params\AuthParam;
use Hillpy\HikSDK\Libraries\Curl\Curl;

trait AuthTrait
{
    public function getAccessToken($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AuthParam::$auth[__FUNCTION__], $paramArr);

        $signatureData = Common::getSignatureData($this->options['app_key'], $this->options['app_secret'], AuthConstant::COMMON_PATH . AuthConstant::GET_ACCESS_TOKEN_PATH);

        $url = $this->options['host'] . AuthConstant::COMMON_PATH . AuthConstant::GET_ACCESS_TOKEN_PATH;
        return json_decode(Curl::httpRequest($signatureData['httpMethod'], $url, $finalParamArr, Common::getCurlOptions($signatureData)), true);
    }
}
