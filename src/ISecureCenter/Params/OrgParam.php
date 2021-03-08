<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class OrgParam
{
    public static $org = [
        'updateSingleOrg' => [
            'orgIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'orgName' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'deleteBatchOrg' => [
            'indexCodes' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'addBatchOrg' => [
            [
                'clientId' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'orgIndexCode' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'orgName' => [
                    'default' => '',
                    'required' => true,
                    'value' => '',
                ],
                'parentIndexCode' => [
                    'default' => '',
                    'required' => true,
                    'value' => '',
                ],
                'orgCode' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
            ],
        ],
        'getRootOrg' => [],
        'getOrgList' => [
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
        'getAdvanceOrgList' => [
            'orgName' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'orgIndexCodes' => [
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
            'parentOrgIndexCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'isSubOrg' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'expressions' => [
                'default' => '',
                'required' => false,
                'value' => [
                    [
                        'key' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                        ],
                        'operator' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                            'enum' => [
                                0,
                                1,
                                2,
                                3,
                                4,
                                5,
                                6,
                                7,
                                8,
                            ],
                        ],
                        'values' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                        ],
                    ]
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
        'getSubOrgListByParentOrgIndexCode' => [
            'parentOrgIndexCode' => [
                'default' => '',
                'required' => true,
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
        'getOrgByTimeRange' => [
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
        'getOrgInfoByOrgIndexCodes' => [
            [
                'orgIndexCodes' => [
                    'default' => '',
                    'required' => true,
                    'value' => '',
                ],
            ],
        ],
    ];
}
