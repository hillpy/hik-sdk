<?php

namespace Hillpy\HikSDK\InfovisionIoT\Params;

class RegionParam
{
    public static $region = [
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
    ];
}
