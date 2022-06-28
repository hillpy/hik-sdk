<?php

namespace Hillpy\HikSDK\InfovisionForesight\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\InfovisionForesight\Constants\CameraConstant;
use Hillpy\HikSDK\InfovisionForesight\Params\CameraParam;

trait CameraTrait
{
    public function getCameras($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERAS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCamerasBySpatialIndex($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CameraParam::$camera[__FUNCTION__], $paramArr);

        $urlPath = CameraConstant::COMMON_PATH . CameraConstant::GET_CAMERAS_BY_SPATIAL_INDEX_WITH_PAGE_PATH;

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
