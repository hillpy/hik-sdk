<?php

namespace Hillpy\HikSDK\ISecureCenter\Constants;

class CameraConstant extends BaseConstant
{
    const SEARCH_CAMERA_PATH = '/api/resource/v2/camera/search';
    const GET_CAMERAS_PATH = '/api/resource/v1/cameras';
    const GET_CAMERAS_BY_REGION_INDEX_CODE_PATH = '/api/resource/v1/regions/regionIndexCode/cameras';
    const GET_CAMERA_PATH = '/api/resource/v1/cameras/indexCode';
    const GET_CAMERA_BY_TIME_RANGE_PATH = '/api/resource/v1/camera/timeRange';
    const GET_CAMERA_RPIVIEW_URLS_PATH = '/api/video/v2/cameras/previewURLs';
    const GET_CAMERA_PLAYBACK_URLS_PATH = '/api/video/v2/cameras/playbackURLs';
    const GET_CAMERA_ONLINE_STATUS_PATH = '/api/nms/v1/online/camera/get';
}
