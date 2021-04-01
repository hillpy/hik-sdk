<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\EventConstant;
use Hillpy\HikSDK\ISecureCenter\Params\EventParam;

trait EventTrait
{
    public function subscribeEventByEventType($paramArr = [])
    {
        $finalParamArr = Common::handleParam(EventParam::$event[__FUNCTION__], $paramArr);

        $urlPath = EventConstant::COMMON_PATH . EventConstant::SUBSCRIBE_EVENT_BY_EVENT_TYPE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getSubscribeEvent($paramArr = [])
    {
        $finalParamArr = Common::handleParam(EventParam::$event[__FUNCTION__], $paramArr);

        $urlPath = EventConstant::COMMON_PATH . EventConstant::GET_SUBSCRIBE_EVENT_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getUnsubscribeEvent($paramArr = [])
    {
        $finalParamArr = Common::handleParam(EventParam::$event[__FUNCTION__], $paramArr);

        $urlPath = EventConstant::COMMON_PATH . EventConstant::GET_UNSUBSCRIBE_EVENT_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function searchEvent($paramArr = [])
    {
        $finalParamArr = Common::handleParam(EventParam::$event[__FUNCTION__], $paramArr);

        $urlPath = EventConstant::COMMON_PATH . EventConstant::SEARCH_EVENT_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
