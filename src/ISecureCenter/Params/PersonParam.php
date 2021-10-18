<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class PersonParam
{
    public static $person = [
        'addSinglePersonV1' => [],
        'addSinglePerson' => [
            'personId' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'personName' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'gender' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    1,
                    2,
                    0,
                ],
            ],
            'orgIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'birthday' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'phoneNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'email' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'certificateType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    111,
                    414,
                    113,
                    335,
                    131,
                    133,
                    990,
                ],
            ],
            'certificateNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'jobNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'faces' => [
                'default' => '',
                'required' => false,
                'value' => [
                    [
                        'faceData' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                        ],
                    ],
                ],
            ],
        ],
        'addBatchPerson' => [
            [
                'clientId' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'personId' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'personName' => [
                    'default' => '',
                    'required' => true,
                    'value' => '',
                ],
                'orgIndexCode' => [
                    'default' => '',
                    'required' => true,
                    'value' => '',
                ],
                'gender' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                    'enum' => [
                        1,
                        2,
                        0,
                    ],
                ],
                'birthday' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'phoneNo' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'email' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'certificateType' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                    'enum' => [
                        111,
                        414,
                        113,
                        335,
                        131,
                        133,
                        990,
                    ],
                ],
                'certificateNo' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
                'jobNo' => [
                    'default' => '',
                    'required' => false,
                    'value' => '',
                ],
            ],
        ],
        'updateSinglePerson' => [
            'personId' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'personName' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'gender' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    1,
                    2,
                    0,
                ],
            ],
            'birthday' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'phoneNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'email' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'certificateType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    111,
                    414,
                    113,
                    335,
                    131,
                    133,
                    990,
                ],
            ],
            'certificateNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'jobNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'deleteBatchPerson' => [
            'personIds' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getOrgIndexCodePersonList' => [
            'orgIndexCode' => [
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
        'getPersonList' => [
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
        'getAdvancePersonList' => [
            'personId' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'personName' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'gender' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    1,
                    2,
                    0,
                ],
            ],
            'orgIndexCodes' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'certificateType' => [
                'default' => '',
                'required' => false,
                'value' => '',
                'enum' => [
                    111,
                    414,
                    113,
                    335,
                    131,
                    133,
                    990,
                ],
            ],
            'certificateNo' => [
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
            'isSubOrg' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'cardNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'plateNo' => [
                'default' => '',
                'required' => false,
                'value' => '',
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
                    ],
                ],
            ],
        ],
        'getPersonInfoByCondition' => [
            'paramName' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    'certificateNo',
                    'personId',
                    'phoneNo',
                    'jobNo',
                ],
            ],
            'paramValue' => [
                'default' => '',
                'require' => true,
                'value' => '',
            ]
        ],
        'getPersonPicture' => [
            'picUri' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'serverIndexCode' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
        ],
        'getPersonListByTimeRange' => [
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
        ]
    ];
}
