<?php

namespace Hillpy\HikSDK\InfovisionIoT\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\InfovisionIoT\Constants\ResourceConstant;
use Hillpy\HikSDK\InfovisionIoT\Params\ResourceParam;

trait ResourceTrait
{
    public function getAllTreeCode($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_ALL_TREE_CODE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRootRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_ROOT_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getSubRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_SUB_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCameras($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_CAMERAS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCamerasBySpatialIndex($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_CAMERAS_BY_SPATIAL_INDEX_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCamerasByRegionIndexCode($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_CAMERAS_BY_REGION_INDEX_CODE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCamera($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_CAMERA_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyCamera($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::MODIFY_CAMERA_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCamerasByRegionIndexCodes($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_CAMERAS_BY_REGION_INDEX_CODES_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
