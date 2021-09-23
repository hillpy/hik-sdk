<?php

namespace Hillpy\HikSDK\InfovisionIoT\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\InfovisionIoT\Constants\RegionConstant;
use Hillpy\HikSDK\InfovisionIoT\Params\RegionParam;

trait RegionTrait
{
    public function getAllTreeCode($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_ALL_TREE_CODE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRootRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_ROOT_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getSubRegions($paramArr = [])
    {
        $finalParamArr = Common::handleParam(RegionParam::$region[__FUNCTION__], $paramArr);

        $urlPath = RegionConstant::COMMON_PATH . RegionConstant::GET_SUB_REGIONS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
