<?php

namespace Hillpy\HikSDK\InfovisionIoT\Params;

class CameraParam
{
    public static $camera = [
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
                    1
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
