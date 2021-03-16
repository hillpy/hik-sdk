<?php

namespace Hillpy\HikSDK\InfovisionIoT\Constants;

class ResourceConstant extends BaseConstant
{
    const GET_ALL_TREE_CODE_PATH = '/api/resource/v1/unit/getAllTreeCode';
    const GET_REGIONS_PATH = '/api/resource/v1/regions';
    const GET_ROOT_REGIONS_PATH = '/api/resource/v1/regions/root';
    const GET_SUB_REGIONS_PATH = '/api/resource/v1/regions/subRegions';
    const GET_CAMERAS_PATH = '/api/resource/v1/cameras';
    const GET_CAMERAS_BY_SPATIAL_INDEX_WITH_PAGE_PATH = '/api/resource/v1/camera/getCamerasBySpatialIndexWithPage';
    const GET_CAMERAS_BY_REGION_INDEX_CODE_PATH = '/api/resource/v1/regions/regionIndexCode/cameras';
    const GET_CAMERA_PATH = '/api/resource/v1/cameras/indexCode';
    const MODIFY_CAMERA_PATH = '/api/resource/v1/camera/modifyCameraOperationResource';
    const GET_CAMERAS_BY_REGION_INDEX_CODES_PATH = '/api/resource/v3/cameras/getAllCamerasByUnitIndexCodes';
}
