<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class RegionConstant extends BaseConstant
{
    const GET_ROOT_REGIONS_PATH = '/api/resource/v1/regions/root';
    const GET_REGIONS_BY_PARAMS_PATH = '/api/irds/v2/region/nodesByParams';
    const GET_SUB_REGIONS_PATH = '/api/resource/v2/regions/subRegions';
    const GET_REGIONS_PATH = '/api/resource/v1/regions';
    const GET_REGION_INFO_PATH = '/api/resource/v1/region/regionCatalog/regionInfo';
    const GET_REGION_BY_TIME_RANGE_PATH = '/api/resource/v1/region/timeRange';
    const ADD_BATCH_REGION_PATH = '/api/resource/v1/region/batch/add';
    const UPDATE_SINGLE_REGION_PATH = '/api/resource/v1/region/single/update';
}
