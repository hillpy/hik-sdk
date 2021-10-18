<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\PersonConstant;
use Hillpy\HikSDK\ISecureCenter\Params\PersonParam;

trait PersonTrait
{
    public function addSinglePersonV1($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::ADD_SINGLE_PERSON_V1_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addSinglePerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::ADD_SINGLE_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addBatchPerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::ADD_BATCH_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function updateSinglePerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::UPDATE_SINGLE_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteBatchPerson($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::DELETE_BATCH_PERSON_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getOrgIndexCodePersonList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::GET_ORGINDEXCODE_PERSON_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::GET_PERSON_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAdvancePersonList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::GET_ADVANCE_PERSON_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonInfoByCondition($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::GET_PERSON_INFO_BY_CONDITION_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonPicture($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::GET_PERSON_PICTURE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPersonListByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(PersonParam::$person[__FUNCTION__], $paramArr);

        $urlPath = PersonConstant::COMMON_PATH . PersonConstant::GET_PERSON_LIST_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
