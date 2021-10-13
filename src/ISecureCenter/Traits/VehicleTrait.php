<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\VehicleConstant;
use Hillpy\HikSDK\ISecureCenter\Params\VehicleParam;

trait VehicleTrait
{
    public function addBatchVehicle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_BATCH_VEHICLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function updateSingleVehicle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::UPDATE_SINGLE_VEHICLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteBatchVehicle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::DELETE_BATCH_VEHICLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAdvanceVehicleList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_ADVANCE_VEHICLE_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleListByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_LIST_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
