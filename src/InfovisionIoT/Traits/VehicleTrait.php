<?php

namespace Hillpy\HikSDK\InfovisionIoT\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\InfovisionIoT\Constants\VehicleConstant;
use Hillpy\HikSDK\InfovisionIoT\Params\VehicleParam;

trait VehicleTrait
{
    public function getVehicleByImageModel($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_BY_IMAGE_MODEL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleByAttrWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_BY_ATTR_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getTracksByVehicleWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_TRACKS_BY_VEHICLE_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function submitVehicleFeaturesJobTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::SUBMIT_VEHICLE_FEATURES_JOB_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleCompareResultGroupByTaskIdWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_COMPARE_RESULT_GROUP_BY_TASK_ID_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleCompareResultByTaskIdWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_COMPARE_RESULT_BY_TASK_ID_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleByDimension($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_BY_DIMENSION_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAccompanyVehiclesWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_ACCOMPANY_VEHICLES_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehiclesByTrackWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLES_BY_TRACK_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehiclesByTimeTrackWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLES_BY_TIME_TRACK_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehiclesByFrequenceWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLES_BY_FREQUENCE_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getHideVehiclesWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_HIDE_VEHICLES_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehiclesPlateFakedWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLES_PLATE_FAKED_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehiclesFirstInCityWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLES_FIRST_IN_CITY_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getNightVehiclesWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_NIGHT_VEHICLES_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleStatisticsByGroupWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_STATISTICS_BY_GROUP_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleStatisticsByGroupWithPageV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_STATISTICS_BY_GROUP_WITH_PAGE_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addVehicleControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_VEHICLE_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function updateVehicleControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::UPDATE_VEHICLE_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleDeployResultWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_DEPLOY_RESULT_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleAlarmRecordsWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_ALARM_RECORDS_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addVehicleNameListControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_VEHICLE_NAME_LIST_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyVehicleNameListControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::MODIFY_VEHICLE_NAME_LIST_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleNameListDeployResultWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_NAME_LIST_DEPLOY_RESULT_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleNameListAlarmRecordsWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_NAME_LIST_ALARM_RECORDS_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addVehicleModelControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_VEHICLE_MODEL_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyVehicleModelControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::MODIFY_VEHICLE_MODEL_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleModelDeployResultWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_MODEL_DEPLOY_RESULT_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleModelAlarmRecordsWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_MODEL_ALARM_RECORDS_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicleLibV3($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_LIB_V3_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addVehicleLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_VEHICLE_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addVehicleLibV3($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_VEHICLE_LIB_V3_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyVehicleLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::MODIFY_VEHICLE_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyVehicleLibV3($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::MODIFY_VEHICLE_LIB_V3_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteVehicleLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::DELETE_VEHICLE_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteVehicleLibV3($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::DELETE_VEHICLE_LIB_V3_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getVehicle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::GET_VEHICLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addVehicle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_VEHICLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addVehicleV3($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::ADD_VEHICLE_V3_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyVehicle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::MODIFY_VEHICLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyVehicleV3($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::MODIFY_VEHICLE_V3_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteVehicle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::DELETE_VEHICLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteVehicleV3($paramArr = [])
    {
        $finalParamArr = Common::handleParam(VehicleParam::$vehicle[__FUNCTION__], $paramArr);

        $urlPath = VehicleConstant::COMMON_PATH . VehicleConstant::DELETE_VEHICLE_V3_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
