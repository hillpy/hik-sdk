<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class FaceParam
{
    public static $face = [
        'addFace' => [
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
        'updateFace' => [
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
        'updateFace' => [
            'faceId' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
    ];
}
