<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\FaceConstant;
use Hillpy\HikSDK\ISecureCenter\Params\FaceParam;

trait FaceTrait
{
    use BaseTrait;

    public function addSingleFace($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_SINGLE_FACE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function updateSingleFace($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::UPDATE_SINGLE_FACE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteSingleFace($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::DELETE_SINGLE_FACE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
