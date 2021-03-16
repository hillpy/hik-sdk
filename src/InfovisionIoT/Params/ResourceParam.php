<?php

namespace Hillpy\HikSDK\InfovisionIoT\Params;

class ResourceParam
{
    public static $resource = [
        'getAllTreeCode' => [],
        'getRegions' => [
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
        'getRootRegions' => [
            'treeCode' => [
                'default' => '0',
                'required' => false,
                'value' => '',
            ],
        ],
        'getSubRegions' => [
            'parentIndexCode' => [
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
    ];
}
