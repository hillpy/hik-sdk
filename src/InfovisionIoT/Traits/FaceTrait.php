<?php

namespace Hillpy\HikSDK\InfovisionIoT\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\InfovisionIoT\Constants\FaceConstant;
use Hillpy\HikSDK\InfovisionIoT\Params\FaceParam;

trait FaceTrait
{
    public function getPersonFaceByAttr($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_FACE_BY_ATTR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceByImageModel($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_BY_IMAGE_MODEL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceDataByAttr($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_DATA_BY_ATTR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceDataByImageModel($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_DATA_BY_IMAGE_MODEL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceRecordById($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_RECORD_BY_ID_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceStatisticsTotalNumByTime($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_STATISTICS_TOTAL_NUM_BY_TIME_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addPersonLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_PERSON_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyPersonLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_PERSON_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deletePersonLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::DELETE_PERSON_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addPerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyPerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deletePerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::DELETE_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function moveLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MOVE_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addSinglePictureControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_SINGLE_PICTURE_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifySinglePictureControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_SINGLE_PICTURE_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addPersonLibControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_PERSON_LIB_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyPersonLibControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_PERSON_LIB_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonControlWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_CONTROL_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addSinglePictureRegionControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_SINGLE_PICTURE_REGION_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifySinglePictureRegionControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_SINGLE_PICTURE_REGION_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addPersonLibRegionControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_PERSON_LIB_REGION_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyPersonLibRegionControl($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_PERSON_LIB_REGION_CONTROL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceAlarmRecordsWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_ALARM_RECORDS_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonControlsDetailsWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_CONTROLS_DETAILS_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
