<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\ResourceConstant;
use Hillpy\HikSDK\ISecureCenter\Params\ResourceParam;

trait ResourceTrait
{
    use BaseTrait;

    public function getResourcesByParams($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_RESOURCES_BY_PARAMS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getSubResources($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_SUB_RESOURCES_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getResources($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_RESOURCES_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getResourcesByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_RESOURCE_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getResourceInfo($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ResourceParam::$resource[__FUNCTION__], $paramArr);

        $urlPath = ResourceConstant::COMMON_PATH . ResourceConstant::GET_RESOURCE_INFO;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
