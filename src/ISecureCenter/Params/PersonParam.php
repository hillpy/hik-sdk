<?php

namespace Hillpy\HikSDK\ISecureCenter\Params;

class PersonParam
{
    public static $demo = [
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
                'value' => '',
            ],
        ],
        'addBatchPerson' => [
        ],
        
    ];
}
