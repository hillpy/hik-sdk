<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class EventConstant extends BaseConstant
{
    const SUBSCRIBE_EVENT_BY_EVENT_TYPE_PATH = '/api/eventService/v1/eventSubscriptionByEventTypes';
    const GET_SUBSCRIBE_EVENT_PATH = '/api/eventService/v1/eventSubscriptionView';
    const UNSUBSCRIBE_EVENT_BY_EVENT_TYPE_PATH = '/api/eventService/v1/eventUnSubscriptionByEventTypes';
    const SEARCH_EVENT_PATH = '/api/els/v1/events/search';
}
