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

    public function getPersonFaceByAttrV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_FACE_BY_ATTR_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceByImageModel($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_BY_IMAGE_MODEL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceByImageModelV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_BY_IMAGE_MODEL_V1_PATH;

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

    public function getFaceDataByImageModelV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_DATA_BY_IMAGE_MODEL_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function submitGetFaceDataTaskByModel($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::SUBMIT_GET_FACE_DATA_TASK_BY_MODEL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceFataByTaskWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_DATA_BY_TASK_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceRecordById($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_RECORD_BY_ID_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function submitGetFaceOccurFrequenceTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::SUBMIT_GET_FACE_OCCUR_COLLISION_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceOccurFrequenceByTaskIdWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_OCCUR_FREQUENCE_BY_TASK_ID_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceOccurFrequenceByGroupIdWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_OCCUR_TOGETHER_BY_GROUP_ID_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function submitGetFaceOccurTogetherTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::SUBMIT_GET_FACE_OCCUR_TOGETHER_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceOccurTogetherByTaskWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_OCCUR_TOGETHER_BY_TASK_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceOccurTogetherByGroupIdWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_OCCUR_TOGETHER_BY_GROUP_ID_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function submitGetFaceOccurCollisionTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::SUBMIT_GET_FACE_OCCUR_COLLISION_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceOccurCollisionByTaskWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_OCCUR_COLLISION_BY_TASK_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceOccurCollisionByGroupIdWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_OCCUR_COLLISION_BY_GROUP_ID_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function submitFacePersonLibsOccurCollisionTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::SUBMIT_FACE_PERSON_LIBS_OCCUR_COLLISION_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFacePersonLibsOccurCollisionByTaskWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_PERSON_LIBS_OCCUR_COLLISION_BY_TASK_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceStatisticsTotalNumByTime($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_STATISTICS_TOTAL_NUM_BY_TIME_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getFaceStatisticsTotalNumByTimeV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_STATISTICS_TOTAL_NUM_BY_TIME_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonLibV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_LIB_V1_PATH;

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

    public function deletePersonLibV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::DELETE_PERSON_LIB_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addPerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addPersonV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::ADD_PERSON_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyPerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function modifyPersonV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MODIFY_PERSON_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deletePerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::DELETE_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deletePersonV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::DELETE_PERSON_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function moveLib($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MOVE_LIB_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function moveLibV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::MOVE_LIB_V1_PATH;

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

    public function getFaceAlarmRecordsWithPageV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_FACE_ALARM_RECORDS_WITH_PAGE_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonControlsDetailsWithPage($paramArr = [])
    {
        $finalParamArr = Common::handleParam(FaceParam::$face[__FUNCTION__], $paramArr);

        $urlPath = FaceConstant::COMMON_PATH . FaceConstant::GET_PERSON_CONTROLS_DETAILS_WITH_PAGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
