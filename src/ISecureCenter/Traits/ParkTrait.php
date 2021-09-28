<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\ParkConstant;
use Hillpy\HikSDK\ISecureCenter\Params\ParkParam;

trait ParkTrait
{
    public function getCrossRecords($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_CROSS_RECORDS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCrossImage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_CROSS_IMAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
