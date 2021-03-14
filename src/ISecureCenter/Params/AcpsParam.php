<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class AcpsParam
{
    public static $acps = [
        'addAuthDownloadTask' => [
            'taskType' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                    7,
                ],
            ],
        ],
        'addAuthDownloadData' => [
            'taskId' => [
                'default' => '',
                'required' => true,
                'value' => '',
            ],
            'resourceInfos' => [
                [
                    'resourceIndexCode' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'resourceType' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                        'enum' => [
                            'region',
                            'org',
                            'acsDevice',
                            'door',
                            'reader',
                            'encodeDevice',
                            'camera',
                            'ioIn',
                            'ioOut',
                            'iasDevice',
                            'subSys',
                            'defence',
                            'visDeviceInDoor',
                            'visDeviceOutDoor',
                            'visDeviceWallDoor',
                            'visDeviceManager',
                            'ecsDevice',
                            'ladderCardReader',
                            'floor',
                            'pemsIoOut',
                            'transducer',
                            'sensor',
                        ],
                    ],
                    'channelNos' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                ],
            ],
            'personInfos' => [
                [
                    'personId' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'operatorType' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                        'enum' => [
                            0,
                            1,
                            2,
                        ],
                    ],
                    'startTime' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'endTime' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'personType' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            1,
                            2
                        ],
                    ],
                    'name' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cards' => [
                        'default' => '',
                        'required' => false,
                        'value' => [
                            [
                                'card' => [
                                    'default' => '',
                                    'required' => true,
                                    'value' => '',
                                ],
                                'status' => [
                                    'default' => '',
                                    'required' => true,
                                    'value' => '',
                                    'enum' => [
                                        0,
                                        1,
                                        2,
                                    ],
                                ],
                                'cardType' => [
                                    'default' => '',
                                    'required' => false,
                                    'value' => '',
                                    'enum' => [
                                        1,
                                        2,
                                        3,
                                        4,
                                        5,
                                        6,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'face' => [
                        'default' => '',
                        'required' => false,
                        'value' => [
                            'card' => [
                                'default' => '',
                                'required' => false,
                                'value' => '',
                            ],
                            'data' => [
                                'default' => '',
                                'required' => true,
                                'value' => '',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'addAuthDownloadTaskSimple' => [
            'resourceInfo' => [
                'default' => '',
                'required' => true,
                'value' => [
                    [
                        'resourceIndexCode' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                        ],
                        'resourceType' => [
                            'default' => '',
                            'required' => true,
                            'value' => '',
                            'enum' => [
                                'region',
                                'org',
                                'acsDevice',
                                'door',
                                'reader',
                                'encodeDevice',
                                'camera',
                                'ioIn',
                                'ioOut',
                                'iasDevice',
                                'subSys',
                                'defence',
                                'visDeviceInDoor',
                                'visDeviceOutDoor',
                                'visDeviceWallDoor',
                                'visDeviceManager',
                                'ecsDevice',
                                'ladderCardReader',
                                'floor',
                                'pemsIoOut',
                                'transducer',
                                'sensor',
                            ],
                        ],
                        'channelNos' => [
                            'default' => '',
                            'required' => false,
                            'value' => '',
                        ],
                    ],
                ],
            ],
            'personInfo' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'personId' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'operatorType' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                        'enum' => [
                            0,
                            1,
                            2,
                        ],
                    ],
                    'startTime' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'endTime' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'personType' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                        'enum' => [
                            1,
                            2
                        ],
                    ],
                    'name' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                    'cards' => [
                        'default' => '',
                        'required' => false,
                        'value' => [
                            [
                                'card' => [
                                    'default' => '',
                                    'required' => true,
                                    'value' => '',
                                ],
                                'status' => [
                                    'default' => '',
                                    'required' => true,
                                    'value' => '',
                                    'enum' => [
                                        0,
                                        1,
                                        2,
                                    ],
                                ],
                                'cardType' => [
                                    'default' => '',
                                    'required' => false,
                                    'value' => '',
                                    'enum' => [
                                        1,
                                        2,
                                        3,
                                        4,
                                        5,
                                        6,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'face' => [
                        'default' => '',
                        'required' => false,
                        'value' => [
                            'card' => [
                                'default' => '',
                                'required' => false,
                                'value' => '',
                            ],
                            'data' => [
                                'default' => '',
                                'required' => true,
                                'value' => '',
                            ],
                        ],
                    ],
                ],
            ],
            'taskType' => [
                'default' => '',
                'required' => true,
                'value' => '',
                'enum' => [
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                    7,
                ],
            ],
        ],
        'addAuthConfig' => [
            'personDatas' => [
                [
                    'indexCodes' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'personDataType' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                        'enum' => [
                            'person',
                            'org',
                        ],
                    ],
                ],
            ],
            'resourceInfos' => [
                'default' => '',
                'required' => true,
                'value' => [
                    'resourceIndexCode' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                    ],
                    'resourceType' => [
                        'default' => '',
                        'required' => true,
                        'value' => '',
                        'enum' => [
                            'region',
                            'org',
                            'acsDevice',
                            'door',
                            'reader',
                            'encodeDevice',
                            'camera',
                            'ioIn',
                            'ioOut',
                            'iasDevice',
                            'subSys',
                            'defence',
                            'visDeviceInDoor',
                            'visDeviceOutDoor',
                            'visDeviceWallDoor',
                            'visDeviceManager',
                            'ecsDevice',
                            'ladderCardReader',
                            'floor',
                            'pemsIoOut',
                            'transducer',
                            'sensor',
                        ],
                    ],
                    'channelNos' => [
                        'default' => '',
                        'required' => false,
                        'value' => '',
                    ],
                ],
            ],
            'startTime' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
            'endTime' => [
                'default' => '',
                'required' => false,
                'value' => '',
            ],
        ],
        'getAuthConfig' => [],
        'deleteAuthConfig' => [],
        'getAuthConfigRate' => [],
        'addDownloadTaskByConfig' => [],
        'addDownloadDataByConfig' => [],
        'addShortcutAuthDownloadByConfig' => [],
        'startAuthDownloadTask' => [],
        'getAuthDownloadTaskProgress' => [],
        'getAuthDownloadTaskList' => [],
        'deleteAuthDownloadTask' => [],
        'stopAuthDownloadTask' => [],
        'getAuthDownloadTask' => [],
        'getChannelDownloadRecordList' => [],
        'getChannelDownloadRecordTotal' => [],
        'getDownloadRecordPersonDetail' => [],
        'getDownloadRecordPersonTotal' => [],
        'getAuthItemTotal' => [],
        'getAuthItemList' => [],
        'getAuthItemSingle' => [],
    ];
}
