<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class DoorConstant extends BaseConstant
{
    const GET_DOOR_STATES_PATH = '/api/acs/v1/door/states';
    const DO_CONTROL_DOOR_PATH = '/api/acs/v1/door/doControl';
    const GET_DOOR_EVENTS_PATH = '/api/acs/v2/door/events';
    const GET_EVENT_PICTURES_PATH = '/api/acs/v1/event/pictures';
    const SEARCH_DOOR_PATH = '/api/resource/v2/door/search';
    const SEARCH_ACS_DEVICE_PATH = '/api/resource/v2/acsDevice/search';
    const GET_DOOR_BY_TIME_RANGE_PATH = '/api/resource/v1/door/timeRange';
    const GET_ACS_DEVICE_BY_TIME_RANGE_PATH = '/api/resource/v1/acsDevice/timeRange';
    const GET_READER_BY_TIME_RANGE_PATH = '/api/resource/v1/reader/timeRange';
    const SEARCH_READER_PATH = '/api/resource/v1/reader/search';
    const GET_ACS_DEVICE_ONLINE_STATUS_PATH = '/api/nms/v1/online/acs_device/get';
    const GET_READER_ONLINE_STATUS_PATH = '/api/nms/v1/online/reader/get';
    const DOWNLOAD_PARTNER_FILE_PATH = '/api/acsncg/v1/partner/file/download';
    const REGISTER_PARTNER_PATH = '/api/acsncg/v1/partner/register';
    const KEEP_PARTNER_HEARTBEAT_PATH = '/api/acsncg/v1/partner/heartbeat';
    const GET_PARTNER_CIPHER_PATH = '/api/acsncg/v1/partner/cipher/get';
    const SUBSCRIBER_PARTNER_PATH = '/api/acsncg/v1/partner/subscriber';
}
