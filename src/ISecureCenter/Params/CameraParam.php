<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class CameraParam
{
    public static $camera = [
        'searchCamera' => [],
        'getCameras' => [],
        'getCamerasByRegionIndexCode' => [],
        'getCamera' => [],
        'getCameraByTimeRange' => [],
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
                    2,
                ],
            ],
            'protocol' => [
                'default' => 'hik',
                'required' => false,
                'value' => '',
                'enum' => [
                    'hik',
                    'rtsp',
                    'rtmp',
                    'hls',
                    'ws',
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
            'streamform' => [
                'default' => 'rtp',
                'required' => false,
                'value' => '',
                'enum' => [
                    'ps',
                    'rtp',
                ],
            ],
        ],
        'getCameraPlaybackURLs' => [
            'cameraIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'recordLocation' => [
                'default' => 0,
                'required' => false,
                'value' => '',
                'enum' => [
                    0,
                    1,
                ],
            ],
            'protocol' => [
                'default' => 'hik',
                'required' => false,
                'value' => '',
                'enum' => [
                    'hik',
                    'rtsp',
                    'rtmp',
                    'hls',
                    'ws',
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
            'streamform' => [
                'default' => 'rtp',
                'required' => false,
                'value' => '',
                'enum' => [
                    'ps',
                    'rtp',
                ],
            ],
            'lockType' => [
                'default' => 0,
                'required' => false,
                'value' => '',
                'enum' => [
                    0,
                    1,
                    2
                ],
            ],
        ],
        'getCameraOnlineStatus' => [],
    ];
}
