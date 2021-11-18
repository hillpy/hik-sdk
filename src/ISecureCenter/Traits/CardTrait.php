<?php

namespace Hillpy\HikSDK\ISecureCenter\Traits;

use Hillpy\HikSDK\Common;
use Hillpy\HikSDK\ISecureCenter\Constants\CardConstant;
use Hillpy\HikSDK\ISecureCenter\Params\CardParam;

trait CardTrait
{
    public function bindCards($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::BIND_CARDS_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function deleteCard($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::DELETE_CARD_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function lostBatchCard($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::LOST_BATCH_CARD_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function unlostBatchCard($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::UNLOST_BATCH_CARD_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCardBarcode($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::GET_CARD_BARCODE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCardList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::GET_CARD_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCardInfo($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::GET_CARD_INFO_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getAdvanceCardList($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::GET_ADVANCE_CARD_LIST_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }

    public function getCardByTimeRange($paramArr = [])
    {
        $finalParamArr = Common::handleParam(CardParam::$card[__FUNCTION__], $paramArr);

        $urlPath = CardConstant::COMMON_PATH . CardConstant::GET_CARD_BY_TIME_RANGE_PATH;

        return $this->handleRequest($urlPath, $finalParamArr);
    }
}
