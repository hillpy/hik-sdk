<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\CameraConstant;
use Hillpy\HikSDK\ISecureCenter\Params\CameraParam;

trait CameraTrait
{
    public function searchCamera($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::SEARCH_CAMERA_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCameras($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERAS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCamerasByRegionIndexCode($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERAS_BY_REGION_INDEX_CODE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCamera($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERA_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCameraByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERA_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

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
