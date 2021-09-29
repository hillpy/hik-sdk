<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class FaceParam
{
    public static $face = [
        'addSingleFace' => [
            'personId' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'faceData' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'updateSingleFace' => [
            'faceId' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'faceData' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'deleteSingleFace' => [
            'faceId' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'checkFacePicture' => [
            'facePicBinaryData' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'facePicUrl' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getFaceCapture' => [],
    ];
}
