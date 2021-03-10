<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\RegionConstant;
use Hillpy\HikSDK\ISecureCenter\Params\RegionParam;

trait RegionTrait
{
    use BaseTrait;

    public function getRootRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_ROOT_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRegionsByParams($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_REGIONS_BY_PARAMS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getSubRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_SUB_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRegionInfo($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_REGION_INFO_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRegionByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_REGION_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addBatchRegion($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::ADD_BATCH_REGION_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function updateSingleRegion($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::UPDATE_SINGLE_REGION_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
