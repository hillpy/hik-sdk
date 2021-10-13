<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class VehicleConstant extends BaseConstant
{
    const ADD_BATCH_VEHICLE_PATH = '/api/resource/v1/vehicle/batch/add';
    const UPDATE_SINGLE_VEHICLE_PATH = '/api/resource/v1/vehicle/single/update';
    const DELETE_BATCH_VEHICLE_PATH = '/api/resource/v1/vehicle/batch/delete';
    const GET_ADVANCE_VEHICLE_LIST_PATH = '/api/resource/v2/vehicle/advance/vehicleList';
    const GET_VEHICLE_LIST_BY_TIME_RANGE_PATH = '/api/resource/v1/vehicle/timeRange';
}
