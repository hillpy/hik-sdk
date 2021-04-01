<?php

namespace Hillpy\HikSDK\InfovisionIoT\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\InfovisionIoT\Constants\VehicleConstant;
use Hillpy\HikSDK\InfovisionIoT\Params\VehicleParam;

trait VehicleTrait
{
    public function getVehicleByAttr($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_BY_ATTR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
