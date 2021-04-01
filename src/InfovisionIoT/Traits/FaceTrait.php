<?php

namespace Hillpy\HikSDK\InfovisionIoT\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\InfovisionIoT\Constants\FaceConstant;
use Hillpy\HikSDK\InfovisionIoT\Params\FaceParam;

trait FaceTrait
{
    public function getFaceDataByAttr($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_DATA_BY_ATTR;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
