<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\DoorConstant;
use Hillpy\HikSDK\ISecureCenter\Params\DoorParam;

trait DoorTrait
{
    public function getDoorStates($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_DOOR_STATES_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function doControlDoor($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::DO_CONTROL_DOOR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getDoorEvents($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_DOOR_EVENTS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getEventPictures($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_EVENT_PICTURES_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function searchDoor($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::SEARCH_DOOR_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function searchAcsDevice($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::SEARCH_ACS_DEVICE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getDoorByRangeTime($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_DOOR_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAcsDeviceByRangeTime($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_ACS_DEVICE_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getReaderByRangeTime($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_READER_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function searchReader($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::SEARCH_READER_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAcsDeviceOnlineStatus($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_ACS_DEVICE_ONLINE_STATUS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getReaderOnlineStatus($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_READER_ONLINE_STATUS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function downloadPartnerFile($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::DOWNLOAD_PARTNER_FILE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function registerPartner($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::REGISTER_PARTNER_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function keepPartnerHeartbeat($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::KEEP_PARTNER_HEARTBEAT_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getPartnerCipher($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::GET_PARTNER_CIPHER_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function subscriberPartner($paramArr = [])
    {
        $finalParamArr = Common::handleParam(DoorParam::$door[__FUNCTION__], $paramArr);

        $urlPath = DoorConstant::COMMON_PATH . DoorConstant::SUBSCRIBER_PARTNER_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
