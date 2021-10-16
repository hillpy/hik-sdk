<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\ParkConstant;
use Hillpy\HikSDK\ISecureCenter\Params\ParkParam;

trait ParkTrait
{
    public function reserveParkingSpace($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::RESERVE_PARKING_SPACE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getReservationRecord($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_RESERVATION_RECORD_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteReservationParkingSpace($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::DELETE_RESERVATION_PARKING_SPACE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCarInRecords($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_CAR_IN_RECORDS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getParkingRecord($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_PARKING_RECORD_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

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

    public function controlPmsDevice($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::CONTROL_PMS_DEVICE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function controlBatchPmsDevice($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::CONTROL_BATCH_PMS_DEVICE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function chargeCar($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::CHARGE_CAR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteChargeCar($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::DELETE_CHARGE_CAR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getChargeCar($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_CHARGE_CAR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRemainParkingSpaceNum($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_REMAIN_PARKING_SPACE_NUM_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getParkingSpaceInfo($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_PARKING_SPACE_INFO_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function bindParkingSpaceToCar($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::BIND_PARKING_SPACE_TO_CAR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function unbindParkingSpaceToCar($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::UNBIND_PARKING_SPACE_TO_CAR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getParkList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_PARK_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function searchPark($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::SEARCH_PARK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getParkDetail($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_PARK_DETAIL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getEntranceList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_ENTRANCE_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRoadwayList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_ROADWAY_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getParkListByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::GET_PARK_LIST_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addCarAlarmWhite($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::ADD_CAR_ALARM_WHITE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addCarAlarmBlack($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::ADD_CAR_ALARM_BLACK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteCarAlarmWhite($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::DELETE_CAR_ALARM_WHITE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteCarAlarmBlack($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::DELETE_CAR_ALARM_BLACK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function updateCarAlarmWhite($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::UPDATE_CAR_ALARM_WHITE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function updateCarAlarmBlack($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::UPDATE_CAR_ALARM_BLACK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function searchCarAlarmWhite($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::SEARCH_CAR_ALARM_WHITE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function searchCarAlarmBlack($paramArr = [])
    {
        $finalParamArr = Common::handleParam(ParkParam::$park[__FUNCTION__], $paramArr);

        $urlPath = ParkConstant::COMMON_PATH . ParkConstant::SEARCH_CAR_ALARM_BLACK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
