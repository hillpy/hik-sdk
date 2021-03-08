<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\OrgConstant;
use Hillpy\HikSDK\ISecureCenter\Params\OrgParam;

trait OrgTrait
{
    use BaseTrait;

    public function updateSingleOrg($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::UPDATE_SINGLE_ORG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteBatchOrg($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::DELETE_BATCH_ORG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addBatchOrg($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::ADD_BATCH_ORG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getRootOrg($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::GET_ROOT_ORG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getOrgList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::GET_ORG_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAdvanceOrgList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::GET_ANVANCE_ORG_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getSubOrgListByParentOrgIndexCode($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::GET_SUB_ORG_LIST_BY_PARENT_ORG_INDEX_CODE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getOrgByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::GET_ORG_BY_TIME_RANGE;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getOrgInfoByOrgIndexCodes($paramArr = [])
    {
        $finalParamArr = Common::handleParam(OrgParam::$org[__FUNCTION__], $paramArr);

        $urlPath = OrgConstant::COMMON_PATH . OrgConstant::GET_ORG_INFO_BY_ORG_INDEX_CODES;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
