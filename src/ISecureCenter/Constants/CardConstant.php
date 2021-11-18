<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class CardConstant extends BaseConstant
{
    const BIND_CARDS_PATH = '/api/cis/v1/card/bindings';
    const DELETE_CARD_PATH = '/api/cis/v1/card/deletion';
    const LOST_BATCH_CARD_PATH = '/api/cis/v1/card/batch/loss';
    const UNLOST_BATCH_CARD_PATH = '/api/cis/v1/card/batch/unLoss';
    const GET_CARD_BARCODE_PATH = '/api/cis/v1/card/barCode';
    const GET_CARD_LIST_PATH = '/api/resource/v1/card/cardList';
    const GET_CARD_INFO_PATH = '/api/irds/v1/card/cardInfo';
    const GET_ADVANCE_CARD_LIST_PATH = '/api/irds/v1/card/advance/cardList';
    const GET_CARD_BY_TIME_RANGE_PATH = '/api/resource/v1/card/timeRange';
}
