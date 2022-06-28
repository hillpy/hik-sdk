<?php

namespace Hillpy\HikSDK\InfovisionForesight\Constants;

class CameraConstant extends BaseConstant
{
    const GET_CAMERAS_PATH = '/api/resource/v1/cameras';
    const GET_CAMERAS_BY_SPATIAL_INDEX_WITH_PAGE_PATH = '/api/resource/v1/camera/getCamerasBySpatialIndexWithPage';
    const GET_CAMERAS_BY_REGION_INDEX_CODE_PATH = '/api/resource/v1/regions/regionIndexCode/cameras';
    const GET_CAMERA_PATH = '/api/resource/v1/cameras/indexCode';
    const GET_CAMERA_RPIVIEW_URLS_PATH = '/api/video/v1/cameras/previewURLs';
    const GET_CAMERA_PLAYBACK_URLS_PATH = '/api/video/v1/cameras/playbackURLs';
}
