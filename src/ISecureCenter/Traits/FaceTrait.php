<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\FaceConstant;
use Hillpy\HikSDK\ISecureCenter\Params\FaceParam;
use Hillpy\HikSDK\Libraries\Curl\Curl;

trait FaceTrait
{
    public function addSingleFace($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $url = $this->options['host'] . FaceConstant::ADD_SINGLE_FACE . http_build_query(['access_token' => $finalParamArr['access_token']]);

        return json_decode(Curl::httpRequest($url, $finalParamArr), true);
    }

    public function updateSingleFace($paramArr = [])
    {
    }

    public function deleteSingleFace($paramArr = [])
    {
    }
}
