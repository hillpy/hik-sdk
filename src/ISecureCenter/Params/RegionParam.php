<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class RegionParam
{
    public static $region = [
        'getRootRegions' => [],
        'getRegionsByParams' => [
            'resourceType' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'parentIndexCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'isSubRegion' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    true,
                    false
                ],
            ],
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
            'authCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'regionType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    10,
                    11,
                    12,
                ],
            ],
            'regionName' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'sonOrgIndexCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'cascadeFlag' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    0,
                    1,
                    2,
                ],
            ],
            'orderBy' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'orderType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    'desc',
                    'asc',
                ],
            ],
        ],
        'getSubRegions' => [
            'parentIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'resourceType' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'authCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
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
            'cascadeFlag' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    0,
                    1,
                    2,
                ],
            ],
        ],
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
        ],
        'getRegionInfo' => [
            'indexCodes' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getRegionByTimeRange' => [
            'startTime' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'endTime' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
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
        ],
        'addBatchRegion' => [
            [
                'clientId' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'regionIndexCode' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'parentIndexCode' => [
                    'default' => '',
                    'required' => true,
                    'value' => '',
                ],
                'regionName' => [
                    'default' => '',
                    'required' => true,
                    'value' => '',
                ],
                'regionCode' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'regionType' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                    'enum' => [
                        10,
                        12
                    ],
                ],
                'description' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
            ],
        ],
        'updateSingleRegion' => [
            'regionIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'parentIndexCode' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'regionName' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'regionCode' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'regionType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    10,
                    12
                ],
            ],
            'description' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
    ];
}
