<?php

namespace Hillpy\HikSDK\InfovisionIoT\Constants;

class VehicleConstant extends BaseConstant
{
    const GET_VEHICLE_BY_IMAGE_MODEL_PATH = '/api/v1/vehicle/queryDataByImageModelWithPage';
    const GET_VEHICLE_BY_ATTR_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryVehiclesByAttrWithPage';
    const GET_TRACKS_BY_VEHICLE_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryTracksByVehicleWithPage';
    const SUBMIT_VEHICLE_FEATURES_JOB_TASK_PATH = '/api/aiapplication/v1/vehicle/submitFeaturesJobTask';
    const GET_VEHICLE_COMPARE_RESULT_GROUP_BY_TASK_ID_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryCompareResultGroupByTaskIdWithPage';
    const GET_VEHICLE_COMPARE_RESULT_BY_TASK_ID_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryCompareResultByTaskIdWithPage';
    const GET_VEHICLE_BY_DIMENSION_PATH = '/api/aiapplication/v1/vehicle/queryVehiclesByDimension';
    const GET_ACCOMPANY_VEHICLES_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryAccompanyVehiclesWithPage';
    const GET_VEHICLES_BY_TRACK_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryVehiclesByTrackWithPage';
    const GET_VEHICLES_BY_TIME_TRACK_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryVehiclesByTimeTrackWithPage';
    const GET_VEHICLES_BY_FREQUENCE_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryVehiclesByFrequencyWithPage';
    const GET_HIDE_VEHICLES_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryHideVehiclesWithPage';
    const GET_VEHICLES_PLATE_FAKED_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryVehiclesPlateFakedWithPage';
    const GET_VEHICLES_FIRST_IN_CITY_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryVehiclesFirstInCityWithPage';
    const GET_NIGHT_VEHICLES_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryNightVehiclesWithPage';
    const GET_VEHICLE_STATISTICS_BY_GROUP_WITH_PAGE_PATH = '/api/aiapplication/v3/vehicle/queryStatisticsVehiclesByGroupWithPage';
    const GET_VEHICLE_STATISTICS_BY_GROUP_WITH_PAGE_V1_PATH = '/api/aiapplication/v1/vehicle/queryStatisticsVehiclesByGroupWithPage';
    const ADD_VEHICLE_CONTROL_PATH = '/api/aiapplication/v1/vehicle/addVehicleControl';
    const UPDATE_VEHICLE_CONTROL_PATH = '/api/aiapplication/v1/vehicle/updateVehicleControl';
    const GET_VEHICLE_DEPLOY_RESULT_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/queryDeployResultWithPage';
    const GET_VEHICLE_ALARM_RECORDS_WITH_PAGE_PATH = '/api/aiapplication/v1/vehicle/vehicleModel/queryVehicleAlarmRecordsWithPage';
    const ADD_VEHICLE_NAME_LIST_CONTROL_PATH = '/api/aiapplication/v3/vehicle/addVehicleNamelistControl';
    const MODIFY_VEHICLE_NAME_LIST_CONTROL_PATH = '/api/aiapplication/v3/vehicle/modifyVehicleNamelistControl';
    const GET_VEHICLE_NAME_LIST_DEPLOY_RESULT_WITH_PAGE_PATH = '/api/aiapplication/v3/vehicle/VehicleNamelist/queryDeployResultWithPage';
    const GET_VEHICLE_NAME_LIST_ALARM_RECORDS_WITH_PAGE_PATH = '/api/aiapplication/v3/vehicle/VehicleNamelist/queryAlarmRecordsWithPage';
    const ADD_VEHICLE_MODEL_CONTROL_PATH = '/api/aiapplication/v3/vehicle/addVehicleModelControl';
    const MODIFY_VEHICLE_MODEL_CONTROL_PATH = '/api/aiapplication/v3/vehicle/modifyVehicleModelControl';
    const GET_VEHICLE_MODEL_DEPLOY_RESULT_WITH_PAGE_PATH = '/api/aiapplication/v3/vehicle/vehicleModel/queryDeployResultWithPage';
    const GET_VEHICLE_MODEL_ALARM_RECORDS_WITH_PAGE_PATH = '/api/aiapplication/v3/vehicle/VehicleModel/queryAlarmRecordsWithPage';
    const GET_VEHICLE_LIB_PATH = '/api/aiapplication/v4/vehicle/vehicleLib/getVehicleLib';
    const GET_VEHICLE_LIB_V3_PATH = '/api/aiapplication/v3/vehicle/vehicleLib/getVehicleLib';
    const ADD_VEHICLE_LIB_PATH = '/api/aiapplication/v4/vehicle/vehicleLib/addVehicleLib';
    const ADD_VEHICLE_LIB_V3_PATH = '/api/aiapplication/v3/vehicle/vehicleLib/addVehicleLib';
    const MODIFY_VEHICLE_LIB_PATH = '/api/aiapplication/v4/vehicle/vehicleLib/modifyVehicleLib';
    const MODIFY_VEHICLE_LIB_V3_PATH = '/api/aiapplication/v3/vehicle/vehicleLib/modifyVehicleLib';
    const DELETE_VEHICLE_LIB_PATH = '/api/aiapplication/v4/vehicle/vehicleLib/deleteVehicleLib';
    const DELETE_VEHICLE_LIB_V3_PATH = '/api/aiapplication/v3/vehicle/vehicleLib/deleteVehicleLib';
    const GET_VEHICLE_PATH = '/api/aiapplication/v1/vehicle/getVehicle';
    const ADD_VEHICLE_PATH = '/api/aiapplication/v4/vehicle/addVehicle';
    const ADD_VEHICLE_V3_PATH = '/api/aiapplication/v3/vehicle/addVehicle';
    const MODIFY_VEHICLE_PATH = '/api/aiapplication/v4/vehicle/modifyVehicle';
    const MODIFY_VEHICLE_V3_PATH = '/api/aiapplication/v3/vehicle/modifyVehicle';
    const DELETE_VEHICLE_PATH = '/api/aiapplication/v4/vehicle/deleteVehicle';
    const DELETE_VEHICLE_V3_PATH = '/api/aiapplication/v3/vehicle/deleteVehicle';
}
