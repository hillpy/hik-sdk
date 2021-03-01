<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\DemoConstant;
use Hillpy\HikSDK\ISecureCenter\Params\DemoParam;
use Hillpy\HikSDK\Libraries\Curl\Curl;

trait DemoTrait
{
    public function getDemo($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DemoParam::$demo[__FUNCTION__], $paramArr);

        $url = DemoConstant::HOST . DemoConstant::GET_DEMO . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }
}
