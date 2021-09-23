<?php

namespace Hillpy\HikSDK\InfovisionIoT\Params;

class CameraParam
{
    public static $camera = [
        'getCameras' => [
            'pageNo' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageSize' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'treeCode' => [
                'default' => '0',
                'required' => false,
                'value' => '',
            ],
        ],
        'getCamerasBySpatialIndex' => [
            'pageNo' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageSize' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'geometryType' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'Circle',
                    'Point',
                    'Polygon',
                ],
            ],
            'treeCode' => [
                'default' => '0',
                'required' => false,
                'value' => '',
            ],
            'longitude' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'latitude' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'distance' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'wkt' => [
                'default' => '0',
                'required' => false,
                'value' => '',
            ],
        ],
        'getCamerasByRegionIndexCode' => [
            'pageNo' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'pageSize' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'regionIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'treeCode' => [
                'default' => '0',
                'required' => false,
                'value' => '',
            ],
        ],
        'getCamera' => [
            'cameraIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'modifyCamera' => [
            'indexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'longitude' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'latitude' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getCamerasByRegionIndexCodes' => [
            'treeCode' => [
                'default' => '0',
                'required' => false,
                'value' => '',
            ],
            'regionIndexCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getCameraPreviewURLs' => [
            'cameraIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'streamType' => [
                'default' => 0,
                'required' => false,
                'value' => '',
                'enum' => [
                    0,
                    1,
                ],
            ],
            'protocol' => [
                'default' => 'rtsp',
                'required' => false,
                'value' => '',
                'enum' => [
                    'rtsp',
                    'rtmp',
                    'hls',
                ],
            ],
            'transmode' => [
                'default' => 1,
                'required' => false,
                'value' => '',
                'enum' => [
                    0,
                    1,
                ],
            ],
            'expand' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getCameraPlaybackURLs' => [
            'cameraIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'beginTime' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'endTime' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'recordLocation' => [
                'default' => '0',
                'required' => true,
                'value' => '',
                'enum' => [
                    '0',
                    '1',
                ],
            ],
            'protocol' => [
                'default' => 'rtsp',
                'required' => false,
                'value' => '',
                'enum' => [
                    'rtsp',
                    'rtmp',
                    'hls',
                ],
            ],
            'needReturnClipInfo' => [
                'default' => false,
                'required' => false,
                'value' => '',
                'enum' => [
                    false,
                    true,
                ],
            ],
            'uuid' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'expand' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
    ];
}
