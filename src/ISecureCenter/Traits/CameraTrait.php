<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\CameraConstant;
use Hillpy\HikSDK\ISecureCenter\Params\CameraParam;

trait CameraTrait
{
    public function getCameraPreviewURLs($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERA_RPIVIEW_URLS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCameraPlaybackURLs($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERA_PLAYBACK_URLS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
