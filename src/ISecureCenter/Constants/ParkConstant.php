<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class ParkConstant extends BaseConstant
{
    const RESERVE_PARKING_SPACE_PATH = '/api/pms/v2/parkingSpace/reservations/addition';
    const GET_RESERVATION_RECORD_PATH = '/api/pms/v2/reserveRecord/page';
    const DELETE_RESERVATION_PARKING_SPACE_PATH = '/api/pms/v1/parkingSpace/reservations/deletion';
    const GET_CAR_IN_RECORDS_PATH = '/api/pms/v1/tempCarInRecords/page';
    const GET_PARKING_RECORD_PATH = '/api/pms/v1/parkingRecord/query';
    const GET_CROSS_RECORDS_PATH = '/api/pms/v1/crossRecords/page';
    const GET_CROSS_IMAGE_PATH = '/api/pms/v1/image';
    const CONTROL_PMS_DEVICE_PATH = '/api/pms/v1/deviceControl';
    const CONTROL_BATCH_PMS_DEVICE_PATH = '/api/pms/v1/deviceControlBatch';
    const GET_REMAIN_PARKING_SPACE_NUM_PATH = '/api/pms/v1/park/remainSpaceNum';
    const GET_PARKING_SPACE_INFO_PATH = '/api/pms/v1/parkingSpace/spaceNo';
    const BIND_PARKING_SPACE_TO_CAR_PATH = '/api/pms/v1/parking_space/car_bind/add';
    const UNBIND_PARKING_SPACE_TO_CAR_PATH = '/api/pms/v1/parking_space/car_bind/add';
    const GET_PARK_LIST_PATH = '/api/resource/v1/park/parkList';
    const SEARCH_PARK_PATH = '/api/resource/v1/park/search';
    const GET_PARK_DETAIL_PATH = '/api/resource/v1/park/detail/get';
    const GET_ENTRANCE_LIST_PATH = '/api/resource/v1/entrance/entranceList';
    const GET_ROADWAY_LIST_PATH = '/api/resource/v1/roadway/roadwayList';
    const GET_PARK_LIST_BY_TIME_RANGE_PATH = '/api/resource/v1/park/timeRange';
    const ADD_CAR_ALARM_WHITE_PATH = '/api/mpc/v1/alarm/white/add';
    const ADD_CAR_ALARM_BLACK_PATH = '/api/mpc/v1/alarm/black/add';
    const DELETE_CAR_ALARM_WHITE_PATH = '/api/mpc/v1/alarm/white/delete';
    const DELETE_CAR_ALARM_BLACK_PATH = '/api/mpc/v1/alarm/black/delete';
    const UPDATE_CAR_ALARM_WHITE_PATH = '/api/mpc/v1/alarm/white/update';
    const UPDATE_CAR_ALARM_BLACK_PATH = '/api/mpc/v1/alarm/black/update';
    const SEARCH_CAR_ALARM_WHITE_PATH = '/api/mpc/v1/alarm/white/search';
    const SEARCH_CAR_ALARM_BLACK_PATH = '/api/mpc/v1/alarm/black/search';
}
