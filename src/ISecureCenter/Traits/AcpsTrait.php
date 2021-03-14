<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\AcpsConstant;
use Hillpy\HikSDK\ISecureCenter\Params\AcpsParam;

trait AcpsTrait
{
    public function addAuthDownloadTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::ADD_AUTH_DOWNLOAD_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addAuthDownloadData($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::ADD_AUTH_DOWNLOAD_DATA_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addAuthDownloadTaskSimple($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::ADD_AUTH_DOWNLOAD_TASK_SIMPLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addAuthConfig($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::ADD_AUTH_CONFIG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAuthConfig($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_AUTH_CONFIG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteAuthConfig($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::DELETE_AUTH_CONFIG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAuthConfigRate($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_AUTH_CONFIG_RATE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addDownloadTaskByConfig($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::ADD_DOWNLOAD_TASK_BY_CONFIG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addDownloadDataByConfig($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::ADD_DOWNLOAD_DATA_BY_CONFIG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function addShortcutAuthDownloadByConfig($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::ADD_SHORTCUT_AUTH_DOWNLOAD_BY_CONFIG_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function startAuthDownloadTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::START_AUTH_DOWNLOAD_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAuthDownloadTaskProgress($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_AUTH_DOWNLOAD_TASK_PROGRESS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAuthDownloadTaskList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_AUTH_DOWNLOAD_TASK_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteAuthDownloadTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::DELETE_AUTH_DOWNLOAD_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function stopAuthDownloadTask($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::STOP_AUTH_DOWNLOAD_TASK_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getChannelDownloadRecordList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_CHANNEL_DOWNLOAD_RECORD_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getChannelDownloadRecordTotal($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_CHANNEL_DOWNLOAD_RECORD_TOTAL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getDownloadRecordPersonDetail($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_DOWNLOAD_RECORD_PERSON_DETAIL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getDownloadRecordPersonTotal($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_DOWNLOAD_RECORD_PERSON_TOTAL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAuthItemTotal($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_AUTH_ITEM_TOTAL_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAuthItemList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_AUTH_ITEM_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAuthItemSingle($paramArr = [])
    {
        $finalParamArr = Common::handleParam(AcpsParam::$acps[__FUNCTION__], $paramArr);

        $urlPath = AcpsConstant::COMMON_PATH . AcpsConstant::GET_AUTH_ITEM_SINGLE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
