<?php

namespace Hillpy\HikSDK\InfovisionIoT\Constants;

class CameraConstant extends BaseConstant
{
    const GET_CAMERAS_PATH = '/api/resource/v1/cameras';
    const GET_CAMERAS_BY_SPATIAL_INDEX_WITH_PAGE_PATH = '/api/resource/v1/camera/getCamerasBySpatialIndexWithPage';
    const GET_CAMERAS_BY_REGION_INDEX_CODE_PATH = '/api/resource/v1/regions/regionIndexCode/cameras';
    const GET_CAMERA_PATH = '/api/resource/v1/cameras/indexCode';
    const MODIFY_CAMERA_PATH = '/api/resource/v1/camera/modifyCameraOperationResource';
    const GET_CAMERAS_BY_REGION_INDEX_CODES_PATH = '/api/resource/v3/cameras/getAllCamerasByUnitIndexCodes';
    const GET_CAMERA_RPIVIEW_URLS_PATH = '/api/video/v1/cameras/previewURLs';
    const GET_CAMERA_PLAYBACK_URLS_PATH = '/api/video/v1/cameras/playbackURLs';
}
